<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2019-01-07 05:45:12 931288 --> Config Class Initialized
INFO - 2019-01-07 05:45:12 931571 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:45:12 966808 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:45:12 970571 --> Utf8 Class Initialized
INFO - 2019-01-07 05:45:12 973104 --> URI Class Initialized
DEBUG - 2019-01-07 05:45:13 021184 --> No URI present. Default controller set.
INFO - 2019-01-07 05:45:13 028551 --> Router Class Initialized
INFO - 2019-01-07 05:45:13 061813 --> Output Class Initialized
INFO - 2019-01-07 05:45:13 071763 --> Security Class Initialized
DEBUG - 2019-01-07 05:45:13 104690 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:45:13 114828 --> Input Class Initialized
INFO - 2019-01-07 05:45:13 118110 --> Language Class Initialized
INFO - 2019-01-07 05:45:13 171988 --> Loader Class Initialized
INFO - 2019-01-07 05:45:13 181085 --> Helper loaded: url_helper
INFO - 2019-01-07 05:45:13 198801 --> Helper loaded: utility_helper
INFO - 2019-01-07 11:15:13 333839 --> Database Driver Class Initialized
INFO - 2019-01-07 11:15:13 524094 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 11:15:13 786792 --> Controller Class Initialized
INFO - 2019-01-07 11:15:13 791062 --> Parser Class Initialized
INFO - 2019-01-07 11:15:13 799179 --> Helper loaded: html_helper
INFO - 2019-01-07 11:15:13 825743 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 11:15:13 860893 --> Model Class Initialized
DEBUG - 2019-01-07 11:15:13 889837 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 11:15:13 895445 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 11:15:13 901110 --> Model Class Initialized
DEBUG - 2019-01-07 11:15:13 902393 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 11:15:14 087783 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 11:15:14 105133 --> Helper loaded: file_helper
DEBUG - 2019-01-07 11:15:14 110620 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 11:15:14 256735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 267623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 336185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 339194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 341284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 341748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 342477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 343050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 344611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 344834 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 345247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 345803 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 347348 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 347585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 347974 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 348506 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 350069 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 350301 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 350722 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 351233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 353115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 353564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 354372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 355140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 358546 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 359035 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 359932 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 360918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 363626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 363998 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 364694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 365704 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 368979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 369436 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 370223 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 371330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 374690 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 375128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 375937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 377031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 380175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 380630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 381448 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 382466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 385715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 386151 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 386987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 387887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 391017 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 391465 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 392301 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 393146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 396310 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 396763 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 397617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 398474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 401691 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 402133 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 402997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 403862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 407040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 407497 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 408335 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 409195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 412380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 412837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 413700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 414943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 418145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 418613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 419469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 420248 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 420923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 421724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 422399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 423089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 423749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 424504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 425165 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 426197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 427191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 428189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 429145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 430075 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 431003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 431931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 432868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 433986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 434835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 435700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 436534 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 437369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 438379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 442085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 442574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 443471 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 444529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 447745 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 448199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 449101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 450156 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 453361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 453831 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 455141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 456036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 459243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 459728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 461087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 462006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 465157 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 465636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 466536 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 467370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 470537 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 470987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 471909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 475303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 476279 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 479494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 480460 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 483814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 484689 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 488377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 489330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 492496 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 493268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 496479 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 11:15:14 497239 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 11:15:14 507874 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 509951 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 510484 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:15:14 513947 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 11:15:14 514765 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 11:15:14 524235 --> Final output sent to browser
DEBUG - 2019-01-07 11:15:14 524388 --> Total execution time: 1.6048
INFO - 2019-01-07 05:45:17 069854 --> Config Class Initialized
INFO - 2019-01-07 05:45:17 070180 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:45:17 072659 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:45:17 072789 --> Utf8 Class Initialized
INFO - 2019-01-07 05:45:17 074444 --> URI Class Initialized
INFO - 2019-01-07 05:45:17 077461 --> Router Class Initialized
INFO - 2019-01-07 05:45:17 080152 --> Output Class Initialized
INFO - 2019-01-07 05:45:17 082176 --> Security Class Initialized
DEBUG - 2019-01-07 05:45:17 084081 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:45:17 084211 --> Input Class Initialized
INFO - 2019-01-07 05:45:17 084836 --> Language Class Initialized
INFO - 2019-01-07 05:45:17 129580 --> Loader Class Initialized
INFO - 2019-01-07 05:45:17 131261 --> Helper loaded: url_helper
INFO - 2019-01-07 05:45:17 132133 --> Helper loaded: utility_helper
INFO - 2019-01-07 11:15:17 143762 --> Database Driver Class Initialized
INFO - 2019-01-07 11:15:17 152364 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 11:15:17 153898 --> Controller Class Initialized
INFO - 2019-01-07 11:15:17 154987 --> Final output sent to browser
DEBUG - 2019-01-07 11:15:17 155108 --> Total execution time: 0.0873
INFO - 2019-01-07 05:45:18 382344 --> Config Class Initialized
INFO - 2019-01-07 05:45:18 382682 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:45:18 385981 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:45:18 386104 --> Utf8 Class Initialized
INFO - 2019-01-07 05:45:18 387974 --> URI Class Initialized
INFO - 2019-01-07 05:45:18 393515 --> Router Class Initialized
INFO - 2019-01-07 05:45:18 397058 --> Output Class Initialized
INFO - 2019-01-07 05:45:18 398978 --> Security Class Initialized
DEBUG - 2019-01-07 05:45:18 400881 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:45:18 401004 --> Input Class Initialized
INFO - 2019-01-07 05:45:18 401837 --> Language Class Initialized
ERROR - 2019-01-07 05:45:18 403889 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 05:45:18 498323 --> Config Class Initialized
INFO - 2019-01-07 05:45:18 498480 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:45:18 501669 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:45:18 501785 --> Utf8 Class Initialized
INFO - 2019-01-07 05:45:18 503463 --> URI Class Initialized
INFO - 2019-01-07 05:45:18 510539 --> Router Class Initialized
INFO - 2019-01-07 05:45:18 514741 --> Output Class Initialized
INFO - 2019-01-07 05:45:18 518342 --> Security Class Initialized
DEBUG - 2019-01-07 05:45:18 520911 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:45:18 521075 --> Input Class Initialized
INFO - 2019-01-07 05:45:18 521924 --> Language Class Initialized
ERROR - 2019-01-07 05:45:18 523328 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 05:45:18 998517 --> Config Class Initialized
INFO - 2019-01-07 05:45:18 998606 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:45:18 999699 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:45:18 999766 --> Utf8 Class Initialized
INFO - 2019-01-07 05:45:19 000427 --> URI Class Initialized
INFO - 2019-01-07 05:45:19 002006 --> Router Class Initialized
INFO - 2019-01-07 05:45:19 003228 --> Output Class Initialized
INFO - 2019-01-07 05:45:19 006712 --> Config Class Initialized
INFO - 2019-01-07 05:45:19 006879 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:45:19 008093 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:45:19 008160 --> Utf8 Class Initialized
INFO - 2019-01-07 05:45:19 009001 --> URI Class Initialized
INFO - 2019-01-07 05:45:19 011080 --> Config Class Initialized
INFO - 2019-01-07 05:45:19 011157 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:45:19 012372 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:45:19 012447 --> Utf8 Class Initialized
INFO - 2019-01-07 05:45:19 013158 --> URI Class Initialized
INFO - 2019-01-07 05:45:19 015512 --> Router Class Initialized
INFO - 2019-01-07 05:45:19 017090 --> Output Class Initialized
INFO - 2019-01-07 05:45:19 018198 --> Security Class Initialized
DEBUG - 2019-01-07 05:45:19 019067 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:45:19 019134 --> Input Class Initialized
INFO - 2019-01-07 05:45:19 019426 --> Language Class Initialized
ERROR - 2019-01-07 05:45:19 019900 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 05:45:19 021898 --> Router Class Initialized
INFO - 2019-01-07 05:45:19 023305 --> Output Class Initialized
INFO - 2019-01-07 05:45:19 024348 --> Security Class Initialized
DEBUG - 2019-01-07 05:45:19 025321 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:45:19 025427 --> Input Class Initialized
INFO - 2019-01-07 05:45:19 025804 --> Language Class Initialized
ERROR - 2019-01-07 05:45:19 026313 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 05:45:19 028295 --> Security Class Initialized
DEBUG - 2019-01-07 05:45:19 029258 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:45:19 029328 --> Input Class Initialized
INFO - 2019-01-07 05:45:19 029647 --> Language Class Initialized
ERROR - 2019-01-07 05:45:19 030335 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 05:45:19 161159 --> Config Class Initialized
INFO - 2019-01-07 05:45:19 161313 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:45:19 164017 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:45:19 164146 --> Utf8 Class Initialized
INFO - 2019-01-07 05:45:19 171941 --> Config Class Initialized
INFO - 2019-01-07 05:45:19 172276 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:45:19 174721 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:45:19 174849 --> Utf8 Class Initialized
INFO - 2019-01-07 05:45:19 176502 --> URI Class Initialized
INFO - 2019-01-07 05:45:19 181344 --> Router Class Initialized
INFO - 2019-01-07 05:45:19 184037 --> Output Class Initialized
INFO - 2019-01-07 05:45:19 185513 --> URI Class Initialized
INFO - 2019-01-07 05:45:19 188860 --> Router Class Initialized
INFO - 2019-01-07 05:45:19 191395 --> Output Class Initialized
INFO - 2019-01-07 05:45:19 193350 --> Security Class Initialized
INFO - 2019-01-07 05:45:19 196048 --> Security Class Initialized
DEBUG - 2019-01-07 05:45:19 197916 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:45:19 198043 --> Input Class Initialized
INFO - 2019-01-07 05:45:19 198654 --> Language Class Initialized
ERROR - 2019-01-07 05:45:19 199661 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-07 05:45:19 202725 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:45:19 202896 --> Input Class Initialized
INFO - 2019-01-07 05:45:19 203743 --> Language Class Initialized
ERROR - 2019-01-07 05:45:19 204948 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 05:45:21 836944 --> Config Class Initialized
INFO - 2019-01-07 05:45:21 837106 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:45:21 839381 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:45:21 839586 --> Utf8 Class Initialized
INFO - 2019-01-07 05:45:21 840878 --> URI Class Initialized
INFO - 2019-01-07 05:45:21 844126 --> Router Class Initialized
INFO - 2019-01-07 05:45:21 847347 --> Output Class Initialized
INFO - 2019-01-07 05:45:21 849347 --> Security Class Initialized
DEBUG - 2019-01-07 05:45:21 851237 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:45:21 851372 --> Input Class Initialized
INFO - 2019-01-07 05:45:21 852014 --> Language Class Initialized
ERROR - 2019-01-07 05:45:21 853035 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-07 05:48:08 368233 --> Config Class Initialized
INFO - 2019-01-07 05:48:08 368427 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:48:08 369939 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:48:08 370011 --> Utf8 Class Initialized
INFO - 2019-01-07 05:48:08 370804 --> URI Class Initialized
DEBUG - 2019-01-07 05:48:08 372137 --> No URI present. Default controller set.
INFO - 2019-01-07 05:48:08 372205 --> Router Class Initialized
INFO - 2019-01-07 05:48:08 373635 --> Output Class Initialized
INFO - 2019-01-07 05:48:08 374777 --> Security Class Initialized
DEBUG - 2019-01-07 05:48:08 375812 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:48:08 375880 --> Input Class Initialized
INFO - 2019-01-07 05:48:08 376197 --> Language Class Initialized
INFO - 2019-01-07 05:48:08 378397 --> Loader Class Initialized
INFO - 2019-01-07 05:48:08 379249 --> Helper loaded: url_helper
INFO - 2019-01-07 05:48:08 379719 --> Helper loaded: utility_helper
INFO - 2019-01-07 11:18:08 385292 --> Database Driver Class Initialized
INFO - 2019-01-07 11:18:08 420641 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 11:18:08 421629 --> Controller Class Initialized
INFO - 2019-01-07 11:18:08 422053 --> Parser Class Initialized
INFO - 2019-01-07 11:18:08 422842 --> Helper loaded: html_helper
INFO - 2019-01-07 11:18:08 423902 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 11:18:08 426781 --> Model Class Initialized
DEBUG - 2019-01-07 11:18:08 436198 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 11:18:08 439124 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 11:18:08 439527 --> Model Class Initialized
DEBUG - 2019-01-07 11:18:08 439965 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 11:18:08 441656 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 11:18:08 442758 --> Helper loaded: file_helper
DEBUG - 2019-01-07 11:18:08 442852 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 11:18:08 445297 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 446280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 452940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 454190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 455713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 455940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 456901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 457797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 459345 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 459573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 459940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 461186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 463236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 463550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 464046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 464798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 466880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 467185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 467720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 468399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 470474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 470787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 471316 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 472012 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 474601 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 474910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 475444 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 476135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 478322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 478645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 479183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 479876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 482088 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 482402 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 482973 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 483668 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 485845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 486145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 486725 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 487402 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 489614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 489917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 490494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 491177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 493499 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 493818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 494393 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 495101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 497359 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 497694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 498285 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 498991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 501208 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 501534 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 502120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 502943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 508842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 509519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 510951 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 512116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 515846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 516165 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 516777 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 517527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 519759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 520071 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 520684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 521385 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 523631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 523941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 524547 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 525218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 525866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 526516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 527141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 527770 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 528389 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 529026 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 529655 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 530289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 530929 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 531557 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 532172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 532800 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 533417 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 534043 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 534672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 535386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 535980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 536578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 537153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 537756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 538403 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 540764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 541078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 541721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 542385 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 544665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 544986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 545633 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 546282 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 548583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 548902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 549556 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 550211 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 552474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 552798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 553426 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 554076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 556293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 556627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 557252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 557909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 560137 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 560484 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 561136 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 563333 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 564045 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 566287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 566979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 569175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 569865 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 572105 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 572793 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 575007 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 575721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 577955 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 11:18:08 578639 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 11:18:08 580781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 582164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 582501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:18:08 584706 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 11:18:08 585241 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 11:18:08 593707 --> Final output sent to browser
DEBUG - 2019-01-07 11:18:08 593801 --> Total execution time: 0.2192
INFO - 2019-01-07 05:48:09 197072 --> Config Class Initialized
INFO - 2019-01-07 05:48:09 197320 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:48:09 199450 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:48:09 199532 --> Utf8 Class Initialized
INFO - 2019-01-07 05:48:09 200634 --> URI Class Initialized
INFO - 2019-01-07 05:48:09 203471 --> Router Class Initialized
INFO - 2019-01-07 05:48:09 205240 --> Output Class Initialized
INFO - 2019-01-07 05:48:09 206506 --> Security Class Initialized
DEBUG - 2019-01-07 05:48:09 207927 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:48:09 208005 --> Input Class Initialized
INFO - 2019-01-07 05:48:09 208400 --> Language Class Initialized
ERROR - 2019-01-07 05:48:09 208978 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 05:48:09 223896 --> Config Class Initialized
INFO - 2019-01-07 05:48:09 224147 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:48:09 226109 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:48:09 226216 --> Utf8 Class Initialized
INFO - 2019-01-07 05:48:09 227458 --> URI Class Initialized
INFO - 2019-01-07 05:48:09 231293 --> Router Class Initialized
INFO - 2019-01-07 05:48:09 233786 --> Output Class Initialized
INFO - 2019-01-07 05:48:09 235305 --> Security Class Initialized
DEBUG - 2019-01-07 05:48:09 236772 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:48:09 236867 --> Input Class Initialized
INFO - 2019-01-07 05:48:09 237361 --> Language Class Initialized
ERROR - 2019-01-07 05:48:09 238105 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 05:48:09 305967 --> Config Class Initialized
INFO - 2019-01-07 05:48:09 306169 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:48:09 308234 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:48:09 308314 --> Utf8 Class Initialized
INFO - 2019-01-07 05:48:09 309925 --> URI Class Initialized
INFO - 2019-01-07 05:48:09 314505 --> Router Class Initialized
INFO - 2019-01-07 05:48:09 316190 --> Output Class Initialized
INFO - 2019-01-07 05:48:09 317631 --> Security Class Initialized
DEBUG - 2019-01-07 05:48:09 318861 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:48:09 318938 --> Input Class Initialized
INFO - 2019-01-07 05:48:09 319324 --> Language Class Initialized
ERROR - 2019-01-07 05:48:09 320087 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 05:48:09 335830 --> Config Class Initialized
INFO - 2019-01-07 05:48:09 335946 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:48:09 337519 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:48:09 337615 --> Utf8 Class Initialized
INFO - 2019-01-07 05:48:09 338572 --> URI Class Initialized
INFO - 2019-01-07 05:48:09 339797 --> Config Class Initialized
INFO - 2019-01-07 05:48:09 340034 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:48:09 341840 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:48:09 341936 --> Utf8 Class Initialized
INFO - 2019-01-07 05:48:09 343147 --> URI Class Initialized
INFO - 2019-01-07 05:48:09 354801 --> Router Class Initialized
INFO - 2019-01-07 05:48:09 356745 --> Output Class Initialized
INFO - 2019-01-07 05:48:09 358201 --> Security Class Initialized
INFO - 2019-01-07 05:48:09 360711 --> Router Class Initialized
INFO - 2019-01-07 05:48:09 363203 --> Output Class Initialized
INFO - 2019-01-07 05:48:09 364738 --> Security Class Initialized
DEBUG - 2019-01-07 05:48:09 366257 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:48:09 366353 --> Input Class Initialized
INFO - 2019-01-07 05:48:09 368720 --> Config Class Initialized
INFO - 2019-01-07 05:48:09 368957 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:48:09 371263 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:48:09 371372 --> Input Class Initialized
INFO - 2019-01-07 05:48:09 372004 --> Language Class Initialized
ERROR - 2019-01-07 05:48:09 373125 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 05:48:09 381156 --> Config Class Initialized
INFO - 2019-01-07 05:48:09 381275 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:48:09 381867 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:48:09 381964 --> Utf8 Class Initialized
INFO - 2019-01-07 05:48:09 383362 --> URI Class Initialized
INFO - 2019-01-07 05:48:09 388051 --> Language Class Initialized
ERROR - 2019-01-07 05:48:09 388951 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-07 05:48:09 392868 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:48:09 392981 --> Utf8 Class Initialized
INFO - 2019-01-07 05:48:09 394119 --> URI Class Initialized
INFO - 2019-01-07 05:48:09 397558 --> Router Class Initialized
INFO - 2019-01-07 05:48:09 399049 --> Router Class Initialized
INFO - 2019-01-07 05:48:09 406438 --> Output Class Initialized
INFO - 2019-01-07 05:48:09 409029 --> Security Class Initialized
DEBUG - 2019-01-07 05:48:09 412503 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:48:09 412664 --> Input Class Initialized
INFO - 2019-01-07 05:48:09 414618 --> Output Class Initialized
INFO - 2019-01-07 05:48:09 416110 --> Security Class Initialized
DEBUG - 2019-01-07 05:48:09 417550 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:48:09 417651 --> Input Class Initialized
INFO - 2019-01-07 05:48:09 418106 --> Language Class Initialized
ERROR - 2019-01-07 05:48:09 418853 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 05:48:09 420480 --> Language Class Initialized
ERROR - 2019-01-07 05:48:09 421324 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 05:48:09 517002 --> Config Class Initialized
INFO - 2019-01-07 05:48:09 517149 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:48:09 519217 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:48:09 519344 --> Utf8 Class Initialized
INFO - 2019-01-07 05:48:09 520581 --> URI Class Initialized
INFO - 2019-01-07 05:48:09 522866 --> Router Class Initialized
INFO - 2019-01-07 05:48:09 525201 --> Output Class Initialized
INFO - 2019-01-07 05:48:09 527018 --> Security Class Initialized
DEBUG - 2019-01-07 05:48:09 528768 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:48:09 528894 --> Input Class Initialized
INFO - 2019-01-07 05:48:09 529444 --> Language Class Initialized
INFO - 2019-01-07 05:48:09 536423 --> Loader Class Initialized
INFO - 2019-01-07 05:48:09 538067 --> Helper loaded: url_helper
INFO - 2019-01-07 05:48:09 538870 --> Helper loaded: utility_helper
INFO - 2019-01-07 11:18:09 548149 --> Database Driver Class Initialized
INFO - 2019-01-07 11:18:09 553333 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 11:18:09 554713 --> Controller Class Initialized
INFO - 2019-01-07 11:18:09 555527 --> Final output sent to browser
DEBUG - 2019-01-07 11:18:09 555649 --> Total execution time: 0.0403
INFO - 2019-01-07 05:52:49 307074 --> Config Class Initialized
INFO - 2019-01-07 05:52:49 307429 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:52:49 309866 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:52:49 309998 --> Utf8 Class Initialized
INFO - 2019-01-07 05:52:49 311786 --> URI Class Initialized
INFO - 2019-01-07 05:52:49 316911 --> Router Class Initialized
INFO - 2019-01-07 05:52:49 319714 --> Output Class Initialized
INFO - 2019-01-07 05:52:49 322335 --> Security Class Initialized
DEBUG - 2019-01-07 05:52:49 325510 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:52:49 325649 --> Input Class Initialized
INFO - 2019-01-07 05:52:49 326843 --> Language Class Initialized
ERROR - 2019-01-07 05:52:49 328093 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 05:59:35 152945 --> Config Class Initialized
INFO - 2019-01-07 05:59:35 153131 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:59:35 154395 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:59:35 154478 --> Utf8 Class Initialized
INFO - 2019-01-07 05:59:35 155261 --> URI Class Initialized
DEBUG - 2019-01-07 05:59:35 156599 --> No URI present. Default controller set.
INFO - 2019-01-07 05:59:35 156672 --> Router Class Initialized
INFO - 2019-01-07 05:59:35 158035 --> Output Class Initialized
INFO - 2019-01-07 05:59:35 159053 --> Security Class Initialized
DEBUG - 2019-01-07 05:59:35 160017 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:59:35 160087 --> Input Class Initialized
INFO - 2019-01-07 05:59:35 160403 --> Language Class Initialized
INFO - 2019-01-07 05:59:35 162431 --> Loader Class Initialized
INFO - 2019-01-07 05:59:35 163275 --> Helper loaded: url_helper
INFO - 2019-01-07 05:59:35 163733 --> Helper loaded: utility_helper
INFO - 2019-01-07 11:29:35 169018 --> Database Driver Class Initialized
INFO - 2019-01-07 11:29:35 174344 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 11:29:35 175137 --> Controller Class Initialized
INFO - 2019-01-07 11:29:35 175538 --> Parser Class Initialized
INFO - 2019-01-07 11:29:35 176094 --> Helper loaded: html_helper
INFO - 2019-01-07 11:29:35 176702 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 11:29:35 178364 --> Model Class Initialized
DEBUG - 2019-01-07 11:29:35 213346 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 11:29:35 321111 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 11:29:35 321594 --> Model Class Initialized
DEBUG - 2019-01-07 11:29:35 322138 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 11:29:35 323951 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 11:29:35 325174 --> Helper loaded: file_helper
DEBUG - 2019-01-07 11:29:35 325277 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 11:29:35 327656 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 328777 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 335568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 338428 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 341644 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 342092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 342853 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 343847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 346700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 347111 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 347904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 349540 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 352535 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 353013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 353869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 354698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 357722 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 358163 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 358939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 360183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 363214 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 363691 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 364489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 365259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 368393 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 368844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 369640 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 370682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 373987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 374521 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 375333 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 376652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 378551 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 378810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 379265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 379827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 381599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 381850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 382297 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 382846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 384615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 384866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 385324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 385858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 387681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 387932 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 388396 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 388928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 390737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 390988 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 391485 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 391982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 393757 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 394007 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 394500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 395009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 396794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 397058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 397558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 398061 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 399842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 400095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 400590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 401097 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 402903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 403153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 403693 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 404207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 406281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 406563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 407049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 407919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 408757 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 409548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 410583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 411716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 412940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 414690 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 415870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 416614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 417363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 418144 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 418905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 419657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 420438 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 421206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 421976 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 423312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 424161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 425000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 425852 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 426716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 427438 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 431199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 431665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 432569 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 433254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 436517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 436968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 437866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 438561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 441739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 442195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 443090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 443802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 447047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 447534 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 448431 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 449121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 452367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 452837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 453742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 454440 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 457643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 458095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 459022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 462819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 463732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 467029 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 467787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 471004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 471756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 475110 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 475845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 479028 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 479758 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 482911 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 11:29:35 483642 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 11:29:35 486634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 488624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 489068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:29:35 492301 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 11:29:35 493068 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 11:29:35 502280 --> Final output sent to browser
DEBUG - 2019-01-07 11:29:35 502445 --> Total execution time: 0.3425
INFO - 2019-01-07 05:59:36 332868 --> Config Class Initialized
INFO - 2019-01-07 05:59:36 332969 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:59:36 334491 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:59:36 334573 --> Utf8 Class Initialized
INFO - 2019-01-07 05:59:36 335376 --> URI Class Initialized
INFO - 2019-01-07 05:59:36 338076 --> Router Class Initialized
INFO - 2019-01-07 05:59:36 339546 --> Output Class Initialized
INFO - 2019-01-07 05:59:36 349941 --> Config Class Initialized
INFO - 2019-01-07 05:59:36 350146 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:59:36 351669 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:59:36 351751 --> Utf8 Class Initialized
INFO - 2019-01-07 05:59:36 352785 --> URI Class Initialized
INFO - 2019-01-07 05:59:36 355760 --> Security Class Initialized
DEBUG - 2019-01-07 05:59:36 356913 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:59:36 356996 --> Input Class Initialized
INFO - 2019-01-07 05:59:36 357348 --> Language Class Initialized
ERROR - 2019-01-07 05:59:36 357955 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 05:59:36 359571 --> Router Class Initialized
INFO - 2019-01-07 05:59:36 361756 --> Output Class Initialized
INFO - 2019-01-07 05:59:36 363476 --> Security Class Initialized
DEBUG - 2019-01-07 05:59:36 364881 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:59:36 364963 --> Input Class Initialized
INFO - 2019-01-07 05:59:36 366019 --> Language Class Initialized
ERROR - 2019-01-07 05:59:36 366682 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 05:59:36 557075 --> Config Class Initialized
INFO - 2019-01-07 05:59:36 557252 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:59:36 558691 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:59:36 558773 --> Utf8 Class Initialized
INFO - 2019-01-07 05:59:36 559864 --> URI Class Initialized
INFO - 2019-01-07 05:59:36 561399 --> Config Class Initialized
INFO - 2019-01-07 05:59:36 561562 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:59:36 563030 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:59:36 563153 --> Utf8 Class Initialized
INFO - 2019-01-07 05:59:36 564384 --> URI Class Initialized
INFO - 2019-01-07 05:59:36 566345 --> Router Class Initialized
INFO - 2019-01-07 05:59:36 570548 --> Router Class Initialized
INFO - 2019-01-07 05:59:36 572909 --> Output Class Initialized
INFO - 2019-01-07 05:59:36 574729 --> Security Class Initialized
DEBUG - 2019-01-07 05:59:36 576364 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:59:36 576509 --> Input Class Initialized
INFO - 2019-01-07 05:59:36 577054 --> Language Class Initialized
ERROR - 2019-01-07 05:59:36 577949 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 05:59:36 578946 --> Output Class Initialized
INFO - 2019-01-07 05:59:36 580873 --> Security Class Initialized
DEBUG - 2019-01-07 05:59:36 582650 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:59:36 582779 --> Input Class Initialized
INFO - 2019-01-07 05:59:36 583353 --> Language Class Initialized
ERROR - 2019-01-07 05:59:36 584286 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 05:59:36 777247 --> Config Class Initialized
INFO - 2019-01-07 05:59:36 777349 --> Hooks Class Initialized
INFO - 2019-01-07 05:59:36 782460 --> Config Class Initialized
INFO - 2019-01-07 05:59:36 782551 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:59:36 783869 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:59:36 783950 --> Utf8 Class Initialized
INFO - 2019-01-07 05:59:36 784924 --> URI Class Initialized
INFO - 2019-01-07 05:59:36 787219 --> Router Class Initialized
DEBUG - 2019-01-07 05:59:36 789735 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:59:36 789818 --> Utf8 Class Initialized
INFO - 2019-01-07 05:59:36 790693 --> URI Class Initialized
INFO - 2019-01-07 05:59:36 793010 --> Router Class Initialized
INFO - 2019-01-07 05:59:36 794487 --> Output Class Initialized
INFO - 2019-01-07 05:59:36 796001 --> Security Class Initialized
DEBUG - 2019-01-07 05:59:36 797137 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:59:36 797219 --> Input Class Initialized
INFO - 2019-01-07 05:59:36 797595 --> Language Class Initialized
ERROR - 2019-01-07 05:59:36 798960 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 05:59:36 801054 --> Output Class Initialized
INFO - 2019-01-07 05:59:36 802251 --> Security Class Initialized
DEBUG - 2019-01-07 05:59:36 803492 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:59:36 803575 --> Input Class Initialized
INFO - 2019-01-07 05:59:36 803967 --> Language Class Initialized
ERROR - 2019-01-07 05:59:36 804558 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 05:59:36 864207 --> Config Class Initialized
INFO - 2019-01-07 05:59:36 864531 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:59:36 866740 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:59:36 866862 --> Utf8 Class Initialized
INFO - 2019-01-07 05:59:36 870556 --> Config Class Initialized
INFO - 2019-01-07 05:59:36 870682 --> Hooks Class Initialized
DEBUG - 2019-01-07 05:59:36 872577 --> UTF-8 Support Enabled
INFO - 2019-01-07 05:59:36 872714 --> Utf8 Class Initialized
INFO - 2019-01-07 05:59:36 873863 --> URI Class Initialized
INFO - 2019-01-07 05:59:36 876008 --> Router Class Initialized
INFO - 2019-01-07 05:59:36 878370 --> URI Class Initialized
INFO - 2019-01-07 05:59:36 882688 --> Router Class Initialized
INFO - 2019-01-07 05:59:36 885397 --> Output Class Initialized
INFO - 2019-01-07 05:59:36 887214 --> Security Class Initialized
INFO - 2019-01-07 05:59:36 888139 --> Output Class Initialized
INFO - 2019-01-07 05:59:36 889847 --> Security Class Initialized
DEBUG - 2019-01-07 05:59:36 891350 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:59:36 891489 --> Input Class Initialized
INFO - 2019-01-07 05:59:36 891995 --> Language Class Initialized
DEBUG - 2019-01-07 05:59:36 898905 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 05:59:36 899024 --> Input Class Initialized
INFO - 2019-01-07 05:59:36 899595 --> Language Class Initialized
ERROR - 2019-01-07 05:59:36 900494 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 05:59:36 903624 --> Loader Class Initialized
INFO - 2019-01-07 05:59:36 904988 --> Helper loaded: url_helper
INFO - 2019-01-07 05:59:36 905733 --> Helper loaded: utility_helper
INFO - 2019-01-07 11:29:36 914166 --> Database Driver Class Initialized
INFO - 2019-01-07 11:29:36 920358 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 11:29:36 923602 --> Controller Class Initialized
INFO - 2019-01-07 11:29:36 924691 --> Final output sent to browser
DEBUG - 2019-01-07 11:29:36 924766 --> Total execution time: 0.0558
INFO - 2019-01-07 06:01:09 856939 --> Config Class Initialized
INFO - 2019-01-07 06:01:09 857284 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:01:09 860022 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:01:09 860160 --> Utf8 Class Initialized
INFO - 2019-01-07 06:01:09 861721 --> URI Class Initialized
DEBUG - 2019-01-07 06:01:09 864280 --> No URI present. Default controller set.
INFO - 2019-01-07 06:01:09 864419 --> Router Class Initialized
INFO - 2019-01-07 06:01:09 867157 --> Output Class Initialized
INFO - 2019-01-07 06:01:09 869173 --> Security Class Initialized
DEBUG - 2019-01-07 06:01:09 871229 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:01:09 871367 --> Input Class Initialized
INFO - 2019-01-07 06:01:09 872044 --> Language Class Initialized
INFO - 2019-01-07 06:01:09 876118 --> Loader Class Initialized
INFO - 2019-01-07 06:01:09 877904 --> Helper loaded: url_helper
INFO - 2019-01-07 06:01:09 878885 --> Helper loaded: utility_helper
INFO - 2019-01-07 11:31:09 889512 --> Database Driver Class Initialized
INFO - 2019-01-07 11:31:09 907308 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 11:31:09 908921 --> Controller Class Initialized
INFO - 2019-01-07 11:31:09 909739 --> Parser Class Initialized
INFO - 2019-01-07 11:31:09 910890 --> Helper loaded: html_helper
INFO - 2019-01-07 11:31:09 912183 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 11:31:09 915519 --> Model Class Initialized
DEBUG - 2019-01-07 11:31:10 103516 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 11:31:10 109590 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 11:31:10 110409 --> Model Class Initialized
DEBUG - 2019-01-07 11:31:10 111176 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 11:31:10 114687 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 11:31:10 116787 --> Helper loaded: file_helper
DEBUG - 2019-01-07 11:31:10 116967 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 11:31:10 121392 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 123155 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 310880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 313175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 316241 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 316772 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 318280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 320472 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 323364 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 323816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 324552 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 325576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 328504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 328923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 329670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 330701 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 333698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 334136 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 334901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 335922 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 338924 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 339380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 340147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 341123 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 344111 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 344573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 345326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 346344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 349376 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 349824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 350608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 351620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 354737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 355181 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 355977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 357127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 360315 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 360776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 361582 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 362607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 365793 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 366236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 367065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 368088 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 371324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 371788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 372642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 373650 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 376813 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 377258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 378119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 379148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 382338 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 382801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 383666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 384711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 387887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 388333 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 389187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 390187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 393445 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 393918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 394788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 395795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 398983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 399437 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 400305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 401318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 405008 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 405580 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 406809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 408061 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 409162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 410149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 411767 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 413233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 414545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 415350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 416156 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 416960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 417736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 418530 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 419289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 420114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 420908 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 421681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 422468 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 423613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 424467 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 425296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 426145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 427016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 427917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 431339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 431823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 432746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 433634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 436934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 437480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 438390 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 439280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 442526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 442976 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 443891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 511629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 515312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 515801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 516738 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 517744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 520988 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 521465 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 522367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 523281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 526504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 526966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 527903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 531100 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 532089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 535341 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 536298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 539582 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 540555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 543821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 544728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 547905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 549838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 553113 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 11:31:10 554091 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 11:31:10 557259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 559607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 560071 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:31:10 563482 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 11:31:10 564258 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 11:31:10 573360 --> Final output sent to browser
DEBUG - 2019-01-07 11:31:10 573518 --> Total execution time: 0.7110
INFO - 2019-01-07 06:01:11 466907 --> Config Class Initialized
INFO - 2019-01-07 06:01:11 467066 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:01:11 469988 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:01:11 470120 --> Utf8 Class Initialized
INFO - 2019-01-07 06:01:11 471793 --> URI Class Initialized
INFO - 2019-01-07 06:01:11 474642 --> Router Class Initialized
INFO - 2019-01-07 06:01:11 477025 --> Output Class Initialized
INFO - 2019-01-07 06:01:11 478836 --> Security Class Initialized
DEBUG - 2019-01-07 06:01:11 480803 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:01:11 480933 --> Input Class Initialized
INFO - 2019-01-07 06:01:11 481667 --> Language Class Initialized
INFO - 2019-01-07 06:01:11 488550 --> Loader Class Initialized
INFO - 2019-01-07 06:01:11 490304 --> Helper loaded: url_helper
INFO - 2019-01-07 06:01:11 491262 --> Helper loaded: utility_helper
INFO - 2019-01-07 11:31:11 503313 --> Database Driver Class Initialized
INFO - 2019-01-07 11:31:11 590585 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 11:31:11 592274 --> Controller Class Initialized
INFO - 2019-01-07 11:31:11 593044 --> Final output sent to browser
DEBUG - 2019-01-07 11:31:11 593156 --> Total execution time: 0.1282
INFO - 2019-01-07 06:01:12 702579 --> Config Class Initialized
INFO - 2019-01-07 06:01:12 702929 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:01:12 706513 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:01:12 706654 --> Utf8 Class Initialized
INFO - 2019-01-07 06:01:12 708659 --> URI Class Initialized
INFO - 2019-01-07 06:01:12 713531 --> Router Class Initialized
INFO - 2019-01-07 06:01:12 716521 --> Output Class Initialized
INFO - 2019-01-07 06:01:12 719996 --> Security Class Initialized
DEBUG - 2019-01-07 06:01:12 724343 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:01:12 724503 --> Input Class Initialized
INFO - 2019-01-07 06:01:12 725176 --> Language Class Initialized
ERROR - 2019-01-07 06:01:12 726294 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:01:12 740900 --> Config Class Initialized
INFO - 2019-01-07 06:01:12 741225 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:01:12 743896 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:01:12 744030 --> Utf8 Class Initialized
INFO - 2019-01-07 06:01:12 745707 --> URI Class Initialized
INFO - 2019-01-07 06:01:12 750407 --> Router Class Initialized
INFO - 2019-01-07 06:01:12 753159 --> Output Class Initialized
INFO - 2019-01-07 06:01:12 755145 --> Security Class Initialized
DEBUG - 2019-01-07 06:01:12 757108 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:01:12 757242 --> Input Class Initialized
INFO - 2019-01-07 06:01:12 757920 --> Language Class Initialized
ERROR - 2019-01-07 06:01:12 759006 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:01:12 930999 --> Config Class Initialized
INFO - 2019-01-07 06:01:12 931155 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:01:12 933913 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:01:12 934050 --> Utf8 Class Initialized
INFO - 2019-01-07 06:01:12 935373 --> URI Class Initialized
INFO - 2019-01-07 06:01:12 939580 --> Router Class Initialized
INFO - 2019-01-07 06:01:12 942044 --> Output Class Initialized
INFO - 2019-01-07 06:01:12 943882 --> Security Class Initialized
DEBUG - 2019-01-07 06:01:12 945684 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:01:12 945817 --> Input Class Initialized
INFO - 2019-01-07 06:01:12 946434 --> Language Class Initialized
ERROR - 2019-01-07 06:01:12 947463 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:01:12 981704 --> Config Class Initialized
INFO - 2019-01-07 06:01:12 981868 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:01:12 984371 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:01:12 984534 --> Utf8 Class Initialized
INFO - 2019-01-07 06:01:12 985860 --> URI Class Initialized
INFO - 2019-01-07 06:01:12 990552 --> Router Class Initialized
INFO - 2019-01-07 06:01:12 993191 --> Output Class Initialized
INFO - 2019-01-07 06:01:12 995110 --> Security Class Initialized
DEBUG - 2019-01-07 06:01:12 996933 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:01:12 997071 --> Input Class Initialized
INFO - 2019-01-07 06:01:12 997718 --> Language Class Initialized
ERROR - 2019-01-07 06:01:12 998837 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:01:13 018553 --> Config Class Initialized
INFO - 2019-01-07 06:01:13 018726 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:01:13 022000 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:01:13 022437 --> Utf8 Class Initialized
INFO - 2019-01-07 06:01:13 023925 --> URI Class Initialized
INFO - 2019-01-07 06:01:13 027287 --> Router Class Initialized
INFO - 2019-01-07 06:01:13 030730 --> Output Class Initialized
INFO - 2019-01-07 06:01:13 033777 --> Security Class Initialized
DEBUG - 2019-01-07 06:01:13 036206 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:01:13 036387 --> Input Class Initialized
INFO - 2019-01-07 06:01:13 037442 --> Language Class Initialized
ERROR - 2019-01-07 06:01:13 038996 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:01:13 047533 --> Config Class Initialized
INFO - 2019-01-07 06:01:13 047691 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:01:13 050040 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:01:13 050177 --> Utf8 Class Initialized
INFO - 2019-01-07 06:01:13 051506 --> URI Class Initialized
INFO - 2019-01-07 06:01:13 054774 --> Router Class Initialized
INFO - 2019-01-07 06:01:13 057250 --> Output Class Initialized
INFO - 2019-01-07 06:01:13 059072 --> Security Class Initialized
DEBUG - 2019-01-07 06:01:13 060878 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:01:13 061011 --> Input Class Initialized
INFO - 2019-01-07 06:01:13 061639 --> Language Class Initialized
ERROR - 2019-01-07 06:01:13 062645 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:01:13 096844 --> Config Class Initialized
INFO - 2019-01-07 06:01:13 096997 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:01:13 099508 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:01:13 099647 --> Utf8 Class Initialized
INFO - 2019-01-07 06:01:13 101064 --> URI Class Initialized
INFO - 2019-01-07 06:01:13 104921 --> Router Class Initialized
INFO - 2019-01-07 06:01:13 107702 --> Output Class Initialized
INFO - 2019-01-07 06:01:13 109937 --> Security Class Initialized
DEBUG - 2019-01-07 06:01:13 111982 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:01:13 112143 --> Input Class Initialized
INFO - 2019-01-07 06:01:13 112868 --> Language Class Initialized
ERROR - 2019-01-07 06:01:13 113986 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:02:15 162848 --> Config Class Initialized
INFO - 2019-01-07 06:02:15 163204 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:02:15 165935 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:02:15 166074 --> Utf8 Class Initialized
INFO - 2019-01-07 06:02:15 167633 --> URI Class Initialized
DEBUG - 2019-01-07 06:02:15 170216 --> No URI present. Default controller set.
INFO - 2019-01-07 06:02:15 170355 --> Router Class Initialized
INFO - 2019-01-07 06:02:15 173152 --> Output Class Initialized
INFO - 2019-01-07 06:02:15 175198 --> Security Class Initialized
DEBUG - 2019-01-07 06:02:15 177242 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:02:15 177380 --> Input Class Initialized
INFO - 2019-01-07 06:02:15 178100 --> Language Class Initialized
INFO - 2019-01-07 06:02:15 182199 --> Loader Class Initialized
INFO - 2019-01-07 06:02:15 184062 --> Helper loaded: url_helper
INFO - 2019-01-07 06:02:15 185003 --> Helper loaded: utility_helper
INFO - 2019-01-07 11:32:15 195812 --> Database Driver Class Initialized
INFO - 2019-01-07 11:32:15 204627 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 11:32:15 206986 --> Controller Class Initialized
INFO - 2019-01-07 11:32:15 207920 --> Parser Class Initialized
INFO - 2019-01-07 11:32:15 209718 --> Helper loaded: html_helper
INFO - 2019-01-07 11:32:15 211961 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 11:32:15 216898 --> Model Class Initialized
DEBUG - 2019-01-07 11:32:15 230678 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 11:32:15 236496 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 11:32:15 237323 --> Model Class Initialized
DEBUG - 2019-01-07 11:32:15 238198 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 11:32:15 241792 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 11:32:15 244797 --> Helper loaded: file_helper
DEBUG - 2019-01-07 11:32:15 244987 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 11:32:15 249737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 251660 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 264141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 270653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 273749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 274210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 274991 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 06:02:15 284132 --> Config Class Initialized
INFO - 2019-01-07 06:02:15 284476 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:32:15 286781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 289771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 290200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 290951 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 292104 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 295082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 295527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 296257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 06:02:15 297422 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:02:15 297570 --> Utf8 Class Initialized
INFO - 2019-01-07 06:02:15 299129 --> URI Class Initialized
DEBUG - 2019-01-07 06:02:15 301732 --> No URI present. Default controller set.
INFO - 2019-01-07 06:02:15 301867 --> Router Class Initialized
DEBUG - 2019-01-07 11:32:15 305752 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 309990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 310837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 312418 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 06:02:15 313956 --> Output Class Initialized
DEBUG - 2019-01-07 11:32:15 315783 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 320653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 321312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 322244 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 06:02:15 325433 --> Security Class Initialized
DEBUG - 2019-01-07 06:02:15 328486 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:02:15 328671 --> Input Class Initialized
INFO - 2019-01-07 06:02:15 329648 --> Language Class Initialized
INFO - 2019-01-07 06:02:15 334919 --> Loader Class Initialized
DEBUG - 2019-01-07 11:32:15 335845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 340470 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 340980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 341789 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 06:02:15 344491 --> Helper loaded: url_helper
DEBUG - 2019-01-07 11:32:15 345884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 350404 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 350905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 351723 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 06:02:15 352957 --> Helper loaded: utility_helper
DEBUG - 2019-01-07 11:32:15 362955 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 367356 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 368103 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 368932 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 11:32:15 373584 --> Database Driver Class Initialized
DEBUG - 2019-01-07 11:32:15 374516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 379518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 380064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 380902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 384987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 388344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 388816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 389669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 390830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 394094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 394575 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 395418 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 400469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 403867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 404326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 405205 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 406303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 411468 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 411940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 412822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 413892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 417117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 417603 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 418473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 419529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 422760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 423213 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 424093 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 425129 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 429605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 430150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 431420 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 432516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 435902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 436372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 437253 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 438292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 439237 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 440227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 441150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 442059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 442995 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 443906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 444900 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 445830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 446736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 447685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 448594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 449520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 450423 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 451414 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 452342 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 453458 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 454301 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 455163 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 456027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 456907 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 457886 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 462469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 463330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 464942 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 465923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 471206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 471956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 473526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 474829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 478528 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 479001 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 480216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 481298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 485213 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 485789 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 487266 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 488528 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 492949 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 493433 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 494600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 495851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 499984 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 500744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 502032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 507102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 508538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 514574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 515889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 518807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 519819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 522664 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 523524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 526249 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 578265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 583070 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 11:32:15 583961 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 11:32:15 586381 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 588093 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 588413 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 591428 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 11:32:15 592005 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 11:32:15 600474 --> Final output sent to browser
DEBUG - 2019-01-07 11:32:15 600573 --> Total execution time: 0.4327
INFO - 2019-01-07 11:32:15 600920 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 11:32:15 602143 --> Controller Class Initialized
INFO - 2019-01-07 11:32:15 602730 --> Parser Class Initialized
INFO - 2019-01-07 11:32:15 603563 --> Helper loaded: html_helper
INFO - 2019-01-07 11:32:15 604492 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 11:32:15 606962 --> Model Class Initialized
DEBUG - 2019-01-07 11:32:15 622133 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 11:32:15 626954 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 11:32:15 627664 --> Model Class Initialized
DEBUG - 2019-01-07 11:32:15 628237 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 11:32:15 630702 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 11:32:15 632142 --> Helper loaded: file_helper
DEBUG - 2019-01-07 11:32:15 632251 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 11:32:15 633981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 634265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 636993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 637562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 639842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 640130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 640676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 641545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 643870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 644159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 644715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 645390 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 647711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 648021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 648603 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 649323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 651868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 652271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 652879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 653631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 656084 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 656420 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 657025 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 657753 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 660183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 660491 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 661065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 661756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 664143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 664449 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 665036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 665746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 668158 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 668478 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 669068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 669770 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 672177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 672489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 673093 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 673794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 676219 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 676538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 677164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 677855 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 680310 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 680639 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 681261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 681941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 684406 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 684735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 685360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 686031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 688482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 688795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 689419 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 690105 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 692188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 692408 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 692831 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 693432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 694921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 695139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 695564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 696139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 697645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 697865 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 698273 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 698875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 700377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 700613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 701025 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 701606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 702142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 702729 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 703273 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 703824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 704351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 704998 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 705681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 706229 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 707954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 712861 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 723597 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 724359 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 725080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 725756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 726409 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 727087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 727507 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 727910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 728310 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 728737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 729440 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 731278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 731519 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 731960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 732666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 734188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 734414 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 734860 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 735563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 737073 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 737296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 737744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 738500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 740056 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 740283 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 740740 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 741461 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 742997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 743226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 743686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 744394 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 745901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 746124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 746583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 748090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 748846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 750385 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 751116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 752615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 753343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 754928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 755667 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 757159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 757894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 759413 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 11:32:15 760123 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 11:32:15 761807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 762757 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 762979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:32:15 764506 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 11:32:15 764878 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 11:32:15 772690 --> Final output sent to browser
DEBUG - 2019-01-07 11:32:15 772768 --> Total execution time: 0.4840
INFO - 2019-01-07 06:02:16 927208 --> Config Class Initialized
INFO - 2019-01-07 06:02:16 927371 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:02:16 929792 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:02:16 929925 --> Utf8 Class Initialized
INFO - 2019-01-07 06:02:16 931330 --> URI Class Initialized
INFO - 2019-01-07 06:02:16 934017 --> Router Class Initialized
INFO - 2019-01-07 06:02:16 936517 --> Output Class Initialized
INFO - 2019-01-07 06:02:16 938337 --> Security Class Initialized
DEBUG - 2019-01-07 06:02:16 940151 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:02:16 940284 --> Input Class Initialized
INFO - 2019-01-07 06:02:16 940912 --> Language Class Initialized
INFO - 2019-01-07 06:02:16 948023 --> Loader Class Initialized
INFO - 2019-01-07 06:02:16 949656 --> Helper loaded: url_helper
INFO - 2019-01-07 06:02:16 950500 --> Helper loaded: utility_helper
INFO - 2019-01-07 11:32:16 959866 --> Database Driver Class Initialized
INFO - 2019-01-07 11:32:16 965708 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 11:32:16 967221 --> Controller Class Initialized
INFO - 2019-01-07 11:32:16 968043 --> Final output sent to browser
DEBUG - 2019-01-07 11:32:16 968168 --> Total execution time: 0.0428
INFO - 2019-01-07 06:02:18 045182 --> Config Class Initialized
INFO - 2019-01-07 06:02:18 045540 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:02:18 048258 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:02:18 048393 --> Utf8 Class Initialized
INFO - 2019-01-07 06:02:18 050097 --> URI Class Initialized
INFO - 2019-01-07 06:02:18 054896 --> Router Class Initialized
INFO - 2019-01-07 06:02:18 057673 --> Output Class Initialized
INFO - 2019-01-07 06:02:18 059689 --> Security Class Initialized
DEBUG - 2019-01-07 06:02:18 061683 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:02:18 061821 --> Input Class Initialized
INFO - 2019-01-07 06:02:18 062506 --> Language Class Initialized
ERROR - 2019-01-07 06:02:18 063599 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:02:18 221039 --> Config Class Initialized
INFO - 2019-01-07 06:02:18 221136 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:02:18 222583 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:02:18 222661 --> Utf8 Class Initialized
INFO - 2019-01-07 06:02:18 223473 --> URI Class Initialized
INFO - 2019-01-07 06:02:18 226250 --> Router Class Initialized
INFO - 2019-01-07 06:02:18 227618 --> Output Class Initialized
INFO - 2019-01-07 06:02:18 228813 --> Security Class Initialized
DEBUG - 2019-01-07 06:02:18 229799 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:02:18 229875 --> Input Class Initialized
INFO - 2019-01-07 06:02:18 230211 --> Language Class Initialized
ERROR - 2019-01-07 06:02:18 230770 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:02:18 338430 --> Config Class Initialized
INFO - 2019-01-07 06:02:18 338535 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:02:18 339811 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:02:18 339886 --> Utf8 Class Initialized
INFO - 2019-01-07 06:02:18 340609 --> URI Class Initialized
INFO - 2019-01-07 06:02:18 342374 --> Router Class Initialized
INFO - 2019-01-07 06:02:18 343796 --> Output Class Initialized
INFO - 2019-01-07 06:02:18 344813 --> Security Class Initialized
DEBUG - 2019-01-07 06:02:18 345920 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:02:18 346293 --> Input Class Initialized
INFO - 2019-01-07 06:02:18 347124 --> Language Class Initialized
ERROR - 2019-01-07 06:02:18 347704 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:02:18 406084 --> Config Class Initialized
INFO - 2019-01-07 06:02:18 406337 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:02:18 408093 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:02:18 408170 --> Utf8 Class Initialized
INFO - 2019-01-07 06:02:18 409099 --> URI Class Initialized
INFO - 2019-01-07 06:02:18 413706 --> Router Class Initialized
INFO - 2019-01-07 06:02:18 417217 --> Output Class Initialized
INFO - 2019-01-07 06:02:18 418598 --> Security Class Initialized
DEBUG - 2019-01-07 06:02:18 419707 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:02:18 419783 --> Input Class Initialized
INFO - 2019-01-07 06:02:18 420192 --> Language Class Initialized
ERROR - 2019-01-07 06:02:18 420840 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:02:18 423403 --> Config Class Initialized
INFO - 2019-01-07 06:02:18 423574 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:02:18 425993 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:02:18 426130 --> Utf8 Class Initialized
INFO - 2019-01-07 06:02:18 427503 --> URI Class Initialized
INFO - 2019-01-07 06:02:18 430824 --> Router Class Initialized
INFO - 2019-01-07 06:02:18 433407 --> Output Class Initialized
INFO - 2019-01-07 06:02:18 434746 --> Config Class Initialized
INFO - 2019-01-07 06:02:18 434827 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:02:18 436115 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:02:18 436191 --> Utf8 Class Initialized
INFO - 2019-01-07 06:02:18 436901 --> URI Class Initialized
INFO - 2019-01-07 06:02:18 438841 --> Router Class Initialized
INFO - 2019-01-07 06:02:18 440313 --> Output Class Initialized
INFO - 2019-01-07 06:02:18 441499 --> Security Class Initialized
DEBUG - 2019-01-07 06:02:18 442569 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:02:18 442643 --> Input Class Initialized
INFO - 2019-01-07 06:02:18 442990 --> Language Class Initialized
ERROR - 2019-01-07 06:02:18 443566 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:02:18 445636 --> Security Class Initialized
DEBUG - 2019-01-07 06:02:18 446652 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:02:18 446727 --> Input Class Initialized
INFO - 2019-01-07 06:02:18 447062 --> Language Class Initialized
ERROR - 2019-01-07 06:02:18 447630 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:02:18 519614 --> Config Class Initialized
INFO - 2019-01-07 06:02:18 519746 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:02:18 521647 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:02:18 521756 --> Utf8 Class Initialized
INFO - 2019-01-07 06:02:18 522824 --> URI Class Initialized
INFO - 2019-01-07 06:02:18 529385 --> Router Class Initialized
INFO - 2019-01-07 06:02:18 531719 --> Output Class Initialized
INFO - 2019-01-07 06:02:18 534586 --> Security Class Initialized
DEBUG - 2019-01-07 06:02:18 536189 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:02:18 536297 --> Input Class Initialized
INFO - 2019-01-07 06:02:18 536809 --> Language Class Initialized
ERROR - 2019-01-07 06:02:18 537643 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:02:24 561356 --> Config Class Initialized
INFO - 2019-01-07 06:02:24 561701 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:02:24 564774 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:02:24 564908 --> Utf8 Class Initialized
INFO - 2019-01-07 06:02:24 566832 --> URI Class Initialized
INFO - 2019-01-07 06:02:24 572765 --> Router Class Initialized
INFO - 2019-01-07 06:02:24 575926 --> Output Class Initialized
INFO - 2019-01-07 06:02:24 578193 --> Security Class Initialized
DEBUG - 2019-01-07 06:02:24 580463 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:02:24 580600 --> Input Class Initialized
INFO - 2019-01-07 06:02:24 581309 --> Language Class Initialized
ERROR - 2019-01-07 06:02:24 582500 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-07 06:02:34 440674 --> Config Class Initialized
INFO - 2019-01-07 06:02:34 441020 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:02:34 443773 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:02:34 443912 --> Utf8 Class Initialized
INFO - 2019-01-07 06:02:34 445755 --> URI Class Initialized
INFO - 2019-01-07 06:02:34 451967 --> Router Class Initialized
INFO - 2019-01-07 06:02:34 455420 --> Output Class Initialized
INFO - 2019-01-07 06:02:34 457725 --> Security Class Initialized
DEBUG - 2019-01-07 06:02:34 460102 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:02:34 460239 --> Input Class Initialized
INFO - 2019-01-07 06:02:34 461730 --> Language Class Initialized
ERROR - 2019-01-07 06:02:34 463028 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 06:02:34 560750 --> Config Class Initialized
INFO - 2019-01-07 06:02:34 560899 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:02:34 563791 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:02:34 563926 --> Utf8 Class Initialized
INFO - 2019-01-07 06:02:34 565360 --> URI Class Initialized
INFO - 2019-01-07 06:02:34 569583 --> Router Class Initialized
INFO - 2019-01-07 06:02:34 573853 --> Output Class Initialized
INFO - 2019-01-07 06:02:34 575613 --> Security Class Initialized
DEBUG - 2019-01-07 06:02:34 577323 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:02:34 577461 --> Input Class Initialized
INFO - 2019-01-07 06:02:34 578310 --> Language Class Initialized
ERROR - 2019-01-07 06:02:34 580051 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 06:06:05 790817 --> Config Class Initialized
INFO - 2019-01-07 06:06:05 791091 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:06:05 793351 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:06:05 793464 --> Utf8 Class Initialized
INFO - 2019-01-07 06:06:05 794924 --> URI Class Initialized
INFO - 2019-01-07 06:06:05 799998 --> Router Class Initialized
INFO - 2019-01-07 06:06:05 801719 --> Output Class Initialized
INFO - 2019-01-07 06:06:05 804044 --> Security Class Initialized
DEBUG - 2019-01-07 06:06:05 805150 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:06:05 805222 --> Input Class Initialized
INFO - 2019-01-07 06:06:05 805592 --> Language Class Initialized
ERROR - 2019-01-07 06:06:05 806181 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 06:27:18 605443 --> Config Class Initialized
INFO - 2019-01-07 06:27:18 610848 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:27:18 615655 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:27:18 615816 --> Utf8 Class Initialized
INFO - 2019-01-07 06:27:18 618172 --> URI Class Initialized
DEBUG - 2019-01-07 06:27:18 622602 --> No URI present. Default controller set.
INFO - 2019-01-07 06:27:18 622745 --> Router Class Initialized
INFO - 2019-01-07 06:27:18 632087 --> Output Class Initialized
INFO - 2019-01-07 06:27:18 633861 --> Security Class Initialized
DEBUG - 2019-01-07 06:27:18 640799 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:27:18 640901 --> Input Class Initialized
INFO - 2019-01-07 06:27:18 641964 --> Language Class Initialized
INFO - 2019-01-07 06:27:18 658111 --> Loader Class Initialized
INFO - 2019-01-07 06:27:18 667217 --> Helper loaded: url_helper
INFO - 2019-01-07 06:27:18 675843 --> Helper loaded: utility_helper
INFO - 2019-01-07 11:57:18 691792 --> Database Driver Class Initialized
INFO - 2019-01-07 11:57:18 724761 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 11:57:18 737524 --> Controller Class Initialized
INFO - 2019-01-07 11:57:18 744986 --> Parser Class Initialized
INFO - 2019-01-07 11:57:18 746151 --> Helper loaded: html_helper
INFO - 2019-01-07 11:57:18 751105 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 11:57:18 779522 --> Model Class Initialized
DEBUG - 2019-01-07 11:57:18 805165 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 11:57:18 808703 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 11:57:18 812202 --> Model Class Initialized
DEBUG - 2019-01-07 11:57:18 813571 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 11:57:18 836008 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 11:57:18 842385 --> Helper loaded: file_helper
DEBUG - 2019-01-07 11:57:18 842533 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 11:57:18 852061 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 862818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 870820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 877875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 880666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 881072 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 881758 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 882682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 884996 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 885341 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 885951 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 886847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 889239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 889606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 890193 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 891064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 893604 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 894042 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 894781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 895999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 898597 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 899002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 899697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 900645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 903934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 904304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 904937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 905858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 908477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 908849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 909492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 910326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 912859 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 913223 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 913876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 914777 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 917928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 918513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 919415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 920532 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 923883 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 924474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 925303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 926214 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 929176 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 929610 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 930368 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 931318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 934303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 934776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 935600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 936611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 939588 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 940006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 940783 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 941746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 944694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 945177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 945943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 946835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 949722 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 950140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 950946 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 951841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 954571 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 954957 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 955672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 956563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 959845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 960305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 961172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 962183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 963129 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 964065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 964989 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 965922 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 968219 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 969209 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 970124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 971239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 971873 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 972642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 973383 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 974020 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 974636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 975526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 976149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 977094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 977914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 978765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 979623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 980645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 981307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 984555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 984854 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 985475 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 986109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 988255 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 988578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 989135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 989773 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 991739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 992026 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 992599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 993182 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 995156 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 995456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 996026 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 996613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 998548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 998832 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 999389 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:18 999984 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:19 001934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:19 002219 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:19 002824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:19 004787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:19 005420 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:19 007422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:19 008086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:19 010094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:19 010787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:19 012792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:19 013403 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:19 015317 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:19 015944 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:19 017883 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 11:57:19 018491 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 11:57:19 020443 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:19 021657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:19 021955 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 11:57:19 025573 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 11:57:19 027417 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 11:57:19 050462 --> Final output sent to browser
DEBUG - 2019-01-07 11:57:19 050643 --> Total execution time: 0.4612
INFO - 2019-01-07 06:27:19 942819 --> Config Class Initialized
INFO - 2019-01-07 06:27:19 942985 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:27:19 945602 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:27:19 945740 --> Utf8 Class Initialized
INFO - 2019-01-07 06:27:19 947114 --> URI Class Initialized
INFO - 2019-01-07 06:27:19 951591 --> Router Class Initialized
INFO - 2019-01-07 06:27:19 954153 --> Output Class Initialized
INFO - 2019-01-07 06:27:19 956099 --> Security Class Initialized
DEBUG - 2019-01-07 06:27:19 957972 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:27:19 958107 --> Input Class Initialized
INFO - 2019-01-07 06:27:19 958770 --> Language Class Initialized
ERROR - 2019-01-07 06:27:19 960593 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 06:27:21 858603 --> Config Class Initialized
INFO - 2019-01-07 06:27:21 858696 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:27:21 860152 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:27:21 860245 --> Utf8 Class Initialized
INFO - 2019-01-07 06:27:21 861238 --> URI Class Initialized
INFO - 2019-01-07 06:27:21 865472 --> Router Class Initialized
INFO - 2019-01-07 06:27:21 866878 --> Output Class Initialized
INFO - 2019-01-07 06:27:21 867866 --> Security Class Initialized
DEBUG - 2019-01-07 06:27:21 868808 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:27:21 868880 --> Input Class Initialized
INFO - 2019-01-07 06:27:21 869206 --> Language Class Initialized
ERROR - 2019-01-07 06:27:21 869746 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 06:27:22 449790 --> Config Class Initialized
INFO - 2019-01-07 06:27:22 449881 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:27:22 451206 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:27:22 451280 --> Utf8 Class Initialized
INFO - 2019-01-07 06:27:22 452047 --> URI Class Initialized
INFO - 2019-01-07 06:27:22 461236 --> Config Class Initialized
INFO - 2019-01-07 06:27:22 461427 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:27:22 463150 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:27:22 463233 --> Utf8 Class Initialized
INFO - 2019-01-07 06:27:22 464716 --> Router Class Initialized
INFO - 2019-01-07 06:27:22 466032 --> Output Class Initialized
INFO - 2019-01-07 06:27:22 467015 --> Security Class Initialized
DEBUG - 2019-01-07 06:27:22 467962 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:27:22 468034 --> Input Class Initialized
INFO - 2019-01-07 06:27:22 468384 --> Language Class Initialized
ERROR - 2019-01-07 06:27:22 468929 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:27:22 471064 --> URI Class Initialized
INFO - 2019-01-07 06:27:22 473627 --> Router Class Initialized
INFO - 2019-01-07 06:27:22 475328 --> Output Class Initialized
INFO - 2019-01-07 06:27:22 476373 --> Security Class Initialized
DEBUG - 2019-01-07 06:27:22 478018 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:27:22 478131 --> Input Class Initialized
INFO - 2019-01-07 06:27:22 478697 --> Language Class Initialized
ERROR - 2019-01-07 06:27:22 479310 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:27:22 587235 --> Config Class Initialized
INFO - 2019-01-07 06:27:22 587547 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:27:22 589936 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:27:22 590051 --> Utf8 Class Initialized
INFO - 2019-01-07 06:27:22 602588 --> URI Class Initialized
INFO - 2019-01-07 06:27:22 609441 --> Router Class Initialized
INFO - 2019-01-07 06:27:22 612030 --> Output Class Initialized
INFO - 2019-01-07 06:27:22 619947 --> Config Class Initialized
INFO - 2019-01-07 06:27:22 620240 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:27:22 622648 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:27:22 622764 --> Utf8 Class Initialized
INFO - 2019-01-07 06:27:22 624191 --> URI Class Initialized
INFO - 2019-01-07 06:27:22 628658 --> Security Class Initialized
DEBUG - 2019-01-07 06:27:22 631434 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:27:22 631565 --> Input Class Initialized
INFO - 2019-01-07 06:27:22 632194 --> Language Class Initialized
ERROR - 2019-01-07 06:27:22 633157 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:27:22 637819 --> Config Class Initialized
INFO - 2019-01-07 06:27:22 638118 --> Hooks Class Initialized
INFO - 2019-01-07 06:27:22 642934 --> Router Class Initialized
INFO - 2019-01-07 06:27:22 645430 --> Output Class Initialized
INFO - 2019-01-07 06:27:22 647236 --> Security Class Initialized
DEBUG - 2019-01-07 06:27:22 648588 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:27:22 648715 --> Utf8 Class Initialized
INFO - 2019-01-07 06:27:22 650047 --> URI Class Initialized
DEBUG - 2019-01-07 06:27:22 653554 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:27:22 653655 --> Input Class Initialized
INFO - 2019-01-07 06:27:22 654099 --> Language Class Initialized
ERROR - 2019-01-07 06:27:22 654974 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:27:22 658971 --> Router Class Initialized
INFO - 2019-01-07 06:27:22 661202 --> Output Class Initialized
INFO - 2019-01-07 06:27:22 662636 --> Security Class Initialized
DEBUG - 2019-01-07 06:27:22 663981 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:27:22 664068 --> Input Class Initialized
INFO - 2019-01-07 06:27:22 664516 --> Language Class Initialized
ERROR - 2019-01-07 06:27:22 665232 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:27:22 679059 --> Config Class Initialized
INFO - 2019-01-07 06:27:22 679224 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:27:22 680860 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:27:22 680949 --> Utf8 Class Initialized
INFO - 2019-01-07 06:27:22 681847 --> URI Class Initialized
INFO - 2019-01-07 06:27:22 685326 --> Router Class Initialized
INFO - 2019-01-07 06:27:22 687175 --> Output Class Initialized
INFO - 2019-01-07 06:27:22 688451 --> Security Class Initialized
DEBUG - 2019-01-07 06:27:22 689755 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:27:22 689842 --> Input Class Initialized
INFO - 2019-01-07 06:27:22 690269 --> Language Class Initialized
ERROR - 2019-01-07 06:27:22 691000 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:27:22 752567 --> Config Class Initialized
INFO - 2019-01-07 06:27:22 752681 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:27:22 754272 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:27:22 754363 --> Utf8 Class Initialized
INFO - 2019-01-07 06:27:22 755330 --> URI Class Initialized
INFO - 2019-01-07 06:27:22 757663 --> Router Class Initialized
INFO - 2019-01-07 06:27:22 759542 --> Output Class Initialized
INFO - 2019-01-07 06:27:22 760894 --> Security Class Initialized
DEBUG - 2019-01-07 06:27:22 762243 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:27:22 762330 --> Input Class Initialized
INFO - 2019-01-07 06:27:22 762769 --> Language Class Initialized
ERROR - 2019-01-07 06:27:22 763489 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:27:23 037290 --> Config Class Initialized
INFO - 2019-01-07 06:27:23 037417 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:27:23 039308 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:27:23 039407 --> Utf8 Class Initialized
INFO - 2019-01-07 06:27:23 040698 --> URI Class Initialized
INFO - 2019-01-07 06:27:23 042541 --> Router Class Initialized
INFO - 2019-01-07 06:27:23 044276 --> Output Class Initialized
INFO - 2019-01-07 06:27:23 046066 --> Security Class Initialized
DEBUG - 2019-01-07 06:27:23 047480 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:27:23 047553 --> Input Class Initialized
INFO - 2019-01-07 06:27:23 047897 --> Language Class Initialized
INFO - 2019-01-07 06:27:23 064872 --> Loader Class Initialized
INFO - 2019-01-07 06:27:23 066700 --> Helper loaded: url_helper
INFO - 2019-01-07 06:27:23 067497 --> Helper loaded: utility_helper
INFO - 2019-01-07 11:57:23 076224 --> Database Driver Class Initialized
INFO - 2019-01-07 11:57:23 082715 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 11:57:23 083786 --> Controller Class Initialized
INFO - 2019-01-07 11:57:23 084357 --> Final output sent to browser
DEBUG - 2019-01-07 11:57:23 084431 --> Total execution time: 0.0488
INFO - 2019-01-07 06:27:31 605356 --> Config Class Initialized
INFO - 2019-01-07 06:27:31 605653 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:27:31 607304 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:27:31 607381 --> Utf8 Class Initialized
INFO - 2019-01-07 06:27:31 608661 --> URI Class Initialized
INFO - 2019-01-07 06:27:31 611289 --> Router Class Initialized
INFO - 2019-01-07 06:27:31 613668 --> Output Class Initialized
INFO - 2019-01-07 06:27:31 615597 --> Security Class Initialized
DEBUG - 2019-01-07 06:27:31 617480 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:27:31 617609 --> Input Class Initialized
INFO - 2019-01-07 06:27:31 618220 --> Language Class Initialized
ERROR - 2019-01-07 06:27:31 619254 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-07 06:36:21 130871 --> Config Class Initialized
INFO - 2019-01-07 06:36:21 131304 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:36:21 137070 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:36:21 137286 --> Utf8 Class Initialized
INFO - 2019-01-07 06:36:21 138784 --> URI Class Initialized
DEBUG - 2019-01-07 06:36:21 141248 --> No URI present. Default controller set.
INFO - 2019-01-07 06:36:21 141365 --> Router Class Initialized
INFO - 2019-01-07 06:36:21 143635 --> Output Class Initialized
INFO - 2019-01-07 06:36:21 145380 --> Security Class Initialized
DEBUG - 2019-01-07 06:36:21 147124 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:36:21 147238 --> Input Class Initialized
INFO - 2019-01-07 06:36:21 147803 --> Language Class Initialized
INFO - 2019-01-07 06:36:21 151169 --> Loader Class Initialized
INFO - 2019-01-07 06:36:21 152699 --> Helper loaded: url_helper
INFO - 2019-01-07 06:36:21 153469 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:06:21 162241 --> Database Driver Class Initialized
INFO - 2019-01-07 12:06:21 275913 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:06:21 277647 --> Controller Class Initialized
INFO - 2019-01-07 12:06:21 278496 --> Parser Class Initialized
INFO - 2019-01-07 12:06:21 279705 --> Helper loaded: html_helper
INFO - 2019-01-07 12:06:21 281059 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 12:06:21 284490 --> Model Class Initialized
DEBUG - 2019-01-07 12:06:21 297502 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 12:06:21 303844 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 12:06:21 305717 --> Model Class Initialized
DEBUG - 2019-01-07 12:06:21 306708 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 12:06:21 312207 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 12:06:21 314775 --> Helper loaded: file_helper
DEBUG - 2019-01-07 12:06:21 315097 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 12:06:21 321909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 324009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 341089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 343554 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 346596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 347053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 347837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 348980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 351878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 352308 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 353108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 354332 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 357316 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 357774 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 358529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 359574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 362643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 363097 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 363878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 364960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 367955 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 368421 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 369200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 370227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 373265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 373733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 374525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 375544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 378621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 379064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 379868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 380891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 384011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 384483 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 385272 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 386301 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 389450 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 389894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 390719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 391733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 394912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 395360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 396200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 397239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 400554 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 401019 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 401887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 402941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 406131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 406611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 407490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 408495 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 412417 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 412895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 413779 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 414834 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 419959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 420473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 421402 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 422547 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 425810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 426273 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 427158 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 428240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 432015 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 432548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 433434 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 434520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 437815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 438281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 439165 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 440191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 441225 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 442163 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 443116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 444082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 445044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 445962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 446880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 447801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 448743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 449651 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 450583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 451522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 452426 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 453339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 454427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 455593 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 456465 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 457305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 458767 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 459544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 460380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 463449 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 463852 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 464663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 465511 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 468358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 468790 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 469599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 470439 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 473272 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 473721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 474530 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 475369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 478249 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 478688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 479499 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 480560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 483381 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 483809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 484642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 485569 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 488476 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 488910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 489762 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 492563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 493510 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 496346 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 497227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 500009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 500891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 503756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 504645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 507422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 508291 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 511683 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:06:21 512561 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 12:06:21 515886 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 517657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 518058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:21 520837 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:06:21 521559 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 12:06:21 530462 --> Final output sent to browser
DEBUG - 2019-01-07 12:06:21 530589 --> Total execution time: 0.3971
INFO - 2019-01-07 06:36:22 397710 --> Config Class Initialized
INFO - 2019-01-07 06:36:22 398049 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:36:22 400641 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:36:22 400754 --> Utf8 Class Initialized
INFO - 2019-01-07 06:36:22 401880 --> URI Class Initialized
INFO - 2019-01-07 06:36:22 404655 --> Router Class Initialized
INFO - 2019-01-07 06:36:22 406083 --> Output Class Initialized
INFO - 2019-01-07 06:36:22 407130 --> Security Class Initialized
DEBUG - 2019-01-07 06:36:22 408907 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:36:22 409003 --> Input Class Initialized
INFO - 2019-01-07 06:36:22 409535 --> Language Class Initialized
ERROR - 2019-01-07 06:36:22 410353 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 06:36:23 266870 --> Config Class Initialized
INFO - 2019-01-07 06:36:23 267019 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:36:23 269282 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:36:23 269417 --> Utf8 Class Initialized
INFO - 2019-01-07 06:36:23 270734 --> URI Class Initialized
INFO - 2019-01-07 06:36:23 274821 --> Router Class Initialized
INFO - 2019-01-07 06:36:23 277167 --> Output Class Initialized
INFO - 2019-01-07 06:36:23 278947 --> Security Class Initialized
DEBUG - 2019-01-07 06:36:23 280647 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:36:23 280772 --> Input Class Initialized
INFO - 2019-01-07 06:36:23 281354 --> Language Class Initialized
ERROR - 2019-01-07 06:36:23 282321 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 06:36:23 640145 --> Config Class Initialized
INFO - 2019-01-07 06:36:23 640255 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:36:23 641801 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:36:23 641891 --> Utf8 Class Initialized
INFO - 2019-01-07 06:36:23 642761 --> URI Class Initialized
INFO - 2019-01-07 06:36:23 644922 --> Router Class Initialized
INFO - 2019-01-07 06:36:23 646564 --> Output Class Initialized
INFO - 2019-01-07 06:36:23 647775 --> Security Class Initialized
DEBUG - 2019-01-07 06:36:23 648957 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:36:23 649045 --> Input Class Initialized
INFO - 2019-01-07 06:36:23 649452 --> Language Class Initialized
ERROR - 2019-01-07 06:36:23 650110 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:36:23 752688 --> Config Class Initialized
INFO - 2019-01-07 06:36:23 752878 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:36:23 754451 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:36:23 754556 --> Utf8 Class Initialized
INFO - 2019-01-07 06:36:23 755438 --> URI Class Initialized
INFO - 2019-01-07 06:36:23 757987 --> Router Class Initialized
INFO - 2019-01-07 06:36:23 759430 --> Output Class Initialized
INFO - 2019-01-07 06:36:23 760571 --> Security Class Initialized
DEBUG - 2019-01-07 06:36:23 762520 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:36:23 762633 --> Input Class Initialized
INFO - 2019-01-07 06:36:23 763267 --> Language Class Initialized
ERROR - 2019-01-07 06:36:23 764276 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:36:23 924563 --> Config Class Initialized
INFO - 2019-01-07 06:36:23 924722 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:36:23 927035 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:36:23 927149 --> Utf8 Class Initialized
INFO - 2019-01-07 06:36:23 928375 --> URI Class Initialized
INFO - 2019-01-07 06:36:23 931777 --> Router Class Initialized
INFO - 2019-01-07 06:36:23 933861 --> Output Class Initialized
INFO - 2019-01-07 06:36:23 935551 --> Security Class Initialized
DEBUG - 2019-01-07 06:36:23 937359 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:36:23 937510 --> Input Class Initialized
INFO - 2019-01-07 06:36:23 938261 --> Language Class Initialized
ERROR - 2019-01-07 06:36:23 939321 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:36:23 950992 --> Config Class Initialized
INFO - 2019-01-07 06:36:23 951106 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:36:23 952776 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:36:23 952903 --> Utf8 Class Initialized
INFO - 2019-01-07 06:36:23 954248 --> URI Class Initialized
INFO - 2019-01-07 06:36:23 957463 --> Router Class Initialized
INFO - 2019-01-07 06:36:23 959934 --> Output Class Initialized
INFO - 2019-01-07 06:36:23 961435 --> Security Class Initialized
DEBUG - 2019-01-07 06:36:23 963160 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:36:23 963246 --> Input Class Initialized
INFO - 2019-01-07 06:36:23 963656 --> Language Class Initialized
ERROR - 2019-01-07 06:36:23 964492 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:36:24 003844 --> Config Class Initialized
INFO - 2019-01-07 06:36:24 004108 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:36:24 006449 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:36:24 006613 --> Utf8 Class Initialized
INFO - 2019-01-07 06:36:24 008011 --> URI Class Initialized
INFO - 2019-01-07 06:36:24 013257 --> Router Class Initialized
INFO - 2019-01-07 06:36:24 018212 --> Output Class Initialized
INFO - 2019-01-07 06:36:24 020659 --> Security Class Initialized
DEBUG - 2019-01-07 06:36:24 022700 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:36:24 022897 --> Input Class Initialized
INFO - 2019-01-07 06:36:24 023740 --> Language Class Initialized
ERROR - 2019-01-07 06:36:24 024859 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:36:24 045367 --> Config Class Initialized
INFO - 2019-01-07 06:36:24 045473 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:36:24 046996 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:36:24 047070 --> Utf8 Class Initialized
INFO - 2019-01-07 06:36:24 047787 --> URI Class Initialized
INFO - 2019-01-07 06:36:24 049743 --> Router Class Initialized
INFO - 2019-01-07 06:36:24 051218 --> Output Class Initialized
INFO - 2019-01-07 06:36:24 052320 --> Security Class Initialized
DEBUG - 2019-01-07 06:36:24 053266 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:36:24 053338 --> Input Class Initialized
INFO - 2019-01-07 06:36:24 054429 --> Language Class Initialized
ERROR - 2019-01-07 06:36:24 055036 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:36:24 060889 --> Config Class Initialized
INFO - 2019-01-07 06:36:24 061000 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:36:24 062485 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:36:24 062560 --> Utf8 Class Initialized
INFO - 2019-01-07 06:36:24 063249 --> URI Class Initialized
INFO - 2019-01-07 06:36:24 065073 --> Router Class Initialized
INFO - 2019-01-07 06:36:24 066418 --> Output Class Initialized
INFO - 2019-01-07 06:36:24 067491 --> Security Class Initialized
DEBUG - 2019-01-07 06:36:24 068819 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:36:24 068892 --> Input Class Initialized
INFO - 2019-01-07 06:36:24 069232 --> Language Class Initialized
ERROR - 2019-01-07 06:36:24 069801 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:36:24 635824 --> Config Class Initialized
INFO - 2019-01-07 06:36:24 636111 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:36:24 637589 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:36:24 637756 --> Utf8 Class Initialized
INFO - 2019-01-07 06:36:24 638561 --> URI Class Initialized
INFO - 2019-01-07 06:36:24 640083 --> Router Class Initialized
INFO - 2019-01-07 06:36:24 641887 --> Output Class Initialized
INFO - 2019-01-07 06:36:24 643141 --> Security Class Initialized
DEBUG - 2019-01-07 06:36:24 644834 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:36:24 644949 --> Input Class Initialized
INFO - 2019-01-07 06:36:24 645545 --> Language Class Initialized
INFO - 2019-01-07 06:36:24 651670 --> Loader Class Initialized
INFO - 2019-01-07 06:36:24 652800 --> Helper loaded: url_helper
INFO - 2019-01-07 06:36:24 653364 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:06:24 663604 --> Database Driver Class Initialized
INFO - 2019-01-07 12:06:24 669203 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:06:24 670181 --> Controller Class Initialized
INFO - 2019-01-07 12:06:24 670851 --> Final output sent to browser
DEBUG - 2019-01-07 12:06:24 670934 --> Total execution time: 0.0364
INFO - 2019-01-07 06:36:55 291424 --> Config Class Initialized
INFO - 2019-01-07 06:36:55 291752 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:36:55 294378 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:36:55 294532 --> Utf8 Class Initialized
INFO - 2019-01-07 06:36:55 295994 --> URI Class Initialized
DEBUG - 2019-01-07 06:36:55 298386 --> No URI present. Default controller set.
INFO - 2019-01-07 06:36:55 298537 --> Router Class Initialized
INFO - 2019-01-07 06:36:55 301155 --> Output Class Initialized
INFO - 2019-01-07 06:36:55 303040 --> Security Class Initialized
DEBUG - 2019-01-07 06:36:55 305290 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:36:55 305479 --> Input Class Initialized
INFO - 2019-01-07 06:36:55 306225 --> Language Class Initialized
INFO - 2019-01-07 06:36:55 312316 --> Loader Class Initialized
INFO - 2019-01-07 06:36:55 314830 --> Helper loaded: url_helper
INFO - 2019-01-07 06:36:55 316176 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:06:55 327898 --> Database Driver Class Initialized
INFO - 2019-01-07 12:06:55 335638 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:06:55 337131 --> Controller Class Initialized
INFO - 2019-01-07 12:06:55 337867 --> Parser Class Initialized
INFO - 2019-01-07 12:06:55 338959 --> Helper loaded: html_helper
INFO - 2019-01-07 12:06:55 340171 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 12:06:55 343856 --> Model Class Initialized
DEBUG - 2019-01-07 12:06:55 358931 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 12:06:55 364905 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 12:06:55 366127 --> Model Class Initialized
DEBUG - 2019-01-07 12:06:55 367218 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 12:06:55 370786 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 12:06:55 372915 --> Helper loaded: file_helper
DEBUG - 2019-01-07 12:06:55 373100 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 12:06:55 377743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 379677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 390644 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 392971 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 396024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 396507 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 397264 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 398308 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 401190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 401649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 402393 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 403723 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 407458 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 407927 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 408693 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 409897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 413073 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 413594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 414365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 415505 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 421871 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 422677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 424010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 425453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 430665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 431361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 432656 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 434036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 438349 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 438851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 439661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 440974 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 444288 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 444777 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 445605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 446796 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 450014 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 450490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 451292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 452346 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 455566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 456027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 456949 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 458580 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 461886 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 462347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 463200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 464240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 475632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 476252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 477149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 478286 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 481515 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 481966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 482839 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 483911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 487119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 487606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 488467 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 489533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 492731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 493185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 494057 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 495070 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 498269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 498748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 499639 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 500746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 503966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 504435 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 505300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 506330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 507369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 508323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 509361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 510850 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 511977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 512810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 513591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 514378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 515171 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 515949 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 516702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 517410 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 518265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 519083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 519947 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 521377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 522263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 523128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 523986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 524879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 525839 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 529731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 530208 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 531153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 532399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 537481 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 537967 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 538913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 539772 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 543153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 543641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 544763 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 545566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 548882 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 549354 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 550288 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 551173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 554729 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 555207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 556195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 557034 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 560277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 560779 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 561729 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 564982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 565862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 569150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 569962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 573168 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 573988 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 588154 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 594583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 598603 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 599581 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 602845 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:06:55 607867 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 12:06:55 611445 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 613600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 614058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:06:55 617403 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:06:55 618251 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 12:06:55 629620 --> Final output sent to browser
DEBUG - 2019-01-07 12:06:55 629900 --> Total execution time: 0.3306
INFO - 2019-01-07 06:36:56 037183 --> Config Class Initialized
INFO - 2019-01-07 06:36:56 037381 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:36:56 038908 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:36:56 038984 --> Utf8 Class Initialized
INFO - 2019-01-07 06:36:56 040505 --> URI Class Initialized
INFO - 2019-01-07 06:36:56 043102 --> Router Class Initialized
INFO - 2019-01-07 06:36:56 045305 --> Output Class Initialized
INFO - 2019-01-07 06:36:56 046361 --> Security Class Initialized
DEBUG - 2019-01-07 06:36:56 047648 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:36:56 047725 --> Input Class Initialized
INFO - 2019-01-07 06:36:56 048082 --> Language Class Initialized
ERROR - 2019-01-07 06:36:56 048861 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:36:56 102952 --> Config Class Initialized
INFO - 2019-01-07 06:36:56 103312 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:36:56 106090 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:36:56 106226 --> Utf8 Class Initialized
INFO - 2019-01-07 06:36:56 115509 --> Config Class Initialized
INFO - 2019-01-07 06:36:56 115626 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:36:56 117629 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:36:56 117736 --> Utf8 Class Initialized
INFO - 2019-01-07 06:36:56 118895 --> URI Class Initialized
INFO - 2019-01-07 06:36:56 124250 --> Router Class Initialized
INFO - 2019-01-07 06:36:56 126876 --> Output Class Initialized
INFO - 2019-01-07 06:36:56 129092 --> URI Class Initialized
INFO - 2019-01-07 06:36:56 133538 --> Router Class Initialized
INFO - 2019-01-07 06:36:56 136060 --> Output Class Initialized
INFO - 2019-01-07 06:36:56 138001 --> Security Class Initialized
INFO - 2019-01-07 06:36:56 138947 --> Security Class Initialized
DEBUG - 2019-01-07 06:36:56 141091 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:36:56 141228 --> Input Class Initialized
INFO - 2019-01-07 06:36:56 141912 --> Language Class Initialized
ERROR - 2019-01-07 06:36:56 143029 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:36:56 154479 --> Config Class Initialized
INFO - 2019-01-07 06:36:56 154632 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:36:56 156972 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:36:56 157109 --> Utf8 Class Initialized
INFO - 2019-01-07 06:36:56 158447 --> URI Class Initialized
INFO - 2019-01-07 06:36:56 161797 --> Router Class Initialized
DEBUG - 2019-01-07 06:36:56 164932 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:36:56 165071 --> Input Class Initialized
INFO - 2019-01-07 06:36:56 165738 --> Language Class Initialized
ERROR - 2019-01-07 06:36:56 166805 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:36:56 169748 --> Output Class Initialized
INFO - 2019-01-07 06:36:56 171708 --> Security Class Initialized
DEBUG - 2019-01-07 06:36:56 173659 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:36:56 173794 --> Input Class Initialized
INFO - 2019-01-07 06:36:56 174451 --> Language Class Initialized
ERROR - 2019-01-07 06:36:56 175519 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:36:56 195842 --> Config Class Initialized
INFO - 2019-01-07 06:36:56 196088 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:36:56 197814 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:36:56 197899 --> Utf8 Class Initialized
INFO - 2019-01-07 06:36:56 198802 --> URI Class Initialized
INFO - 2019-01-07 06:36:56 201299 --> Router Class Initialized
INFO - 2019-01-07 06:36:56 202810 --> Output Class Initialized
INFO - 2019-01-07 06:36:56 203988 --> Security Class Initialized
DEBUG - 2019-01-07 06:36:56 214310 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:36:56 214416 --> Input Class Initialized
INFO - 2019-01-07 06:36:56 214848 --> Language Class Initialized
ERROR - 2019-01-07 06:36:56 215564 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:36:56 218481 --> Config Class Initialized
INFO - 2019-01-07 06:36:56 218694 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:36:56 220360 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:36:56 220458 --> Utf8 Class Initialized
INFO - 2019-01-07 06:36:56 221507 --> URI Class Initialized
INFO - 2019-01-07 06:36:56 224407 --> Router Class Initialized
INFO - 2019-01-07 06:36:56 226115 --> Output Class Initialized
INFO - 2019-01-07 06:36:56 227350 --> Security Class Initialized
DEBUG - 2019-01-07 06:36:56 228599 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:36:56 228684 --> Input Class Initialized
INFO - 2019-01-07 06:36:56 229091 --> Language Class Initialized
ERROR - 2019-01-07 06:36:56 229787 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:36:56 254287 --> Config Class Initialized
INFO - 2019-01-07 06:36:56 254575 --> Hooks Class Initialized
INFO - 2019-01-07 06:36:56 262510 --> Config Class Initialized
INFO - 2019-01-07 06:36:56 262779 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:36:56 269378 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:36:56 269653 --> Utf8 Class Initialized
DEBUG - 2019-01-07 06:36:56 270806 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:36:56 270939 --> Utf8 Class Initialized
INFO - 2019-01-07 06:36:56 272248 --> URI Class Initialized
INFO - 2019-01-07 06:36:56 274748 --> Router Class Initialized
INFO - 2019-01-07 06:36:56 277230 --> Output Class Initialized
INFO - 2019-01-07 06:36:56 279083 --> Security Class Initialized
INFO - 2019-01-07 06:36:56 281425 --> URI Class Initialized
INFO - 2019-01-07 06:36:56 284815 --> Router Class Initialized
INFO - 2019-01-07 06:36:56 287554 --> Output Class Initialized
INFO - 2019-01-07 06:36:56 289518 --> Security Class Initialized
DEBUG - 2019-01-07 06:36:56 290929 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:36:56 291063 --> Input Class Initialized
INFO - 2019-01-07 06:36:56 291707 --> Language Class Initialized
DEBUG - 2019-01-07 06:36:56 303386 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:36:56 303615 --> Input Class Initialized
INFO - 2019-01-07 06:36:56 304605 --> Language Class Initialized
ERROR - 2019-01-07 06:36:56 306183 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:36:56 312750 --> Loader Class Initialized
INFO - 2019-01-07 06:36:56 315294 --> Helper loaded: url_helper
INFO - 2019-01-07 06:36:56 316625 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:06:56 330252 --> Database Driver Class Initialized
INFO - 2019-01-07 12:06:56 334988 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:06:56 336481 --> Controller Class Initialized
INFO - 2019-01-07 12:06:56 337313 --> Final output sent to browser
DEBUG - 2019-01-07 12:06:56 337445 --> Total execution time: 0.0889
INFO - 2019-01-07 06:39:06 387727 --> Config Class Initialized
INFO - 2019-01-07 06:39:06 387921 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:39:06 389343 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:39:06 389444 --> Utf8 Class Initialized
INFO - 2019-01-07 06:39:06 390331 --> URI Class Initialized
DEBUG - 2019-01-07 06:39:06 391697 --> No URI present. Default controller set.
INFO - 2019-01-07 06:39:06 391772 --> Router Class Initialized
INFO - 2019-01-07 06:39:06 393158 --> Output Class Initialized
INFO - 2019-01-07 06:39:06 394191 --> Security Class Initialized
DEBUG - 2019-01-07 06:39:06 395227 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:39:06 395301 --> Input Class Initialized
INFO - 2019-01-07 06:39:06 395777 --> Language Class Initialized
INFO - 2019-01-07 06:39:06 397888 --> Loader Class Initialized
INFO - 2019-01-07 06:39:06 398829 --> Helper loaded: url_helper
INFO - 2019-01-07 06:39:06 399315 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:09:06 409662 --> Database Driver Class Initialized
INFO - 2019-01-07 12:09:06 417089 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:09:06 418346 --> Controller Class Initialized
INFO - 2019-01-07 12:09:06 418955 --> Parser Class Initialized
INFO - 2019-01-07 12:09:06 419861 --> Helper loaded: html_helper
INFO - 2019-01-07 12:09:06 421114 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 12:09:06 424524 --> Model Class Initialized
DEBUG - 2019-01-07 12:09:06 436527 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 12:09:06 444950 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 12:09:06 445807 --> Model Class Initialized
DEBUG - 2019-01-07 12:09:06 446646 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 12:09:06 450206 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 12:09:06 452306 --> Helper loaded: file_helper
DEBUG - 2019-01-07 12:09:06 452518 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 12:09:06 457067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 459285 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 469394 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 473565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 476501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 476763 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 477178 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 477829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 479959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 480227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 480745 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 481492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 483016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 483239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 483638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 484199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 485814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 486052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 486465 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 487056 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 488624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 488866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 489269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 489815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 491556 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 492027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 492445 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 492981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 494731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 494968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 495374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 495928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 497566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 497809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 498218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 498764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 500350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 500600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 501014 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 501758 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 503819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 504060 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 504508 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 505074 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 506750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 506989 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 507427 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 507980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 509643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 509882 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 510329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 510876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 512597 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 512835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 513305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 513932 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 515608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 515990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 516755 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 517328 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 518971 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 519212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 519675 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 520273 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 521960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 522202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 522695 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 523260 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 524895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 525136 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 525641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 526294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 527753 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 528572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 529074 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 529577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 530071 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 530658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 531155 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 531672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 532166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 532686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 533183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 534038 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 534914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 535770 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 536550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 537107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 537584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 538023 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 538466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 538898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 539370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 539808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 540235 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 540676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 541119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 541909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 543744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 543982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 544466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 545216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 546906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 547152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 547637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 548383 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 550000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 550235 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 550724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 551480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 553145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 553388 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 553869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 554631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 556257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 556525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 556993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 557679 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 559339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 559628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 560108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 561760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 562293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 563976 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 564501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 566107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 566627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 568275 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 568798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 570422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 570935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 572561 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:09:06 573057 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 12:09:06 574727 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 575747 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 575984 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:09:06 577609 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:09:06 578007 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 12:09:06 586014 --> Final output sent to browser
DEBUG - 2019-01-07 12:09:06 586090 --> Total execution time: 0.1922
INFO - 2019-01-07 06:39:07 477375 --> Config Class Initialized
INFO - 2019-01-07 06:39:07 477601 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:39:07 479921 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:39:07 480031 --> Utf8 Class Initialized
INFO - 2019-01-07 06:39:07 481178 --> URI Class Initialized
INFO - 2019-01-07 06:39:07 483994 --> Router Class Initialized
INFO - 2019-01-07 06:39:07 485730 --> Output Class Initialized
INFO - 2019-01-07 06:39:07 487132 --> Security Class Initialized
DEBUG - 2019-01-07 06:39:07 488706 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:39:07 488790 --> Input Class Initialized
INFO - 2019-01-07 06:39:07 489182 --> Language Class Initialized
ERROR - 2019-01-07 06:39:07 490201 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 06:39:08 815726 --> Config Class Initialized
INFO - 2019-01-07 06:39:08 815970 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:39:08 817887 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:39:08 817981 --> Utf8 Class Initialized
INFO - 2019-01-07 06:39:08 819127 --> URI Class Initialized
INFO - 2019-01-07 06:39:08 822357 --> Router Class Initialized
INFO - 2019-01-07 06:39:08 824551 --> Output Class Initialized
INFO - 2019-01-07 06:39:08 825936 --> Security Class Initialized
DEBUG - 2019-01-07 06:39:08 827299 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:39:08 827995 --> Input Class Initialized
INFO - 2019-01-07 06:39:08 828507 --> Language Class Initialized
ERROR - 2019-01-07 06:39:08 829263 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 06:39:09 293890 --> Config Class Initialized
INFO - 2019-01-07 06:39:09 294061 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:39:09 296931 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:39:09 297117 --> Utf8 Class Initialized
INFO - 2019-01-07 06:39:09 298197 --> URI Class Initialized
INFO - 2019-01-07 06:39:09 301001 --> Router Class Initialized
INFO - 2019-01-07 06:39:09 303312 --> Output Class Initialized
INFO - 2019-01-07 06:39:09 305550 --> Security Class Initialized
DEBUG - 2019-01-07 06:39:09 307740 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:39:09 307915 --> Input Class Initialized
INFO - 2019-01-07 06:39:09 308566 --> Language Class Initialized
ERROR - 2019-01-07 06:39:09 309809 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:39:09 369127 --> Config Class Initialized
INFO - 2019-01-07 06:39:09 369282 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:39:09 372688 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:39:09 372865 --> Utf8 Class Initialized
INFO - 2019-01-07 06:39:09 374726 --> URI Class Initialized
INFO - 2019-01-07 06:39:09 378591 --> Router Class Initialized
INFO - 2019-01-07 06:39:09 382649 --> Output Class Initialized
INFO - 2019-01-07 06:39:09 384197 --> Security Class Initialized
DEBUG - 2019-01-07 06:39:09 385286 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:39:09 385360 --> Input Class Initialized
INFO - 2019-01-07 06:39:09 385716 --> Language Class Initialized
ERROR - 2019-01-07 06:39:09 386282 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:39:09 575956 --> Config Class Initialized
INFO - 2019-01-07 06:39:09 576085 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:39:09 578218 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:39:09 578367 --> Utf8 Class Initialized
INFO - 2019-01-07 06:39:09 579457 --> URI Class Initialized
INFO - 2019-01-07 06:39:09 582212 --> Router Class Initialized
INFO - 2019-01-07 06:39:09 591945 --> Config Class Initialized
INFO - 2019-01-07 06:39:09 592066 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:39:09 595310 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:39:09 595426 --> Utf8 Class Initialized
INFO - 2019-01-07 06:39:09 596441 --> URI Class Initialized
INFO - 2019-01-07 06:39:09 606487 --> Output Class Initialized
INFO - 2019-01-07 06:39:09 608014 --> Security Class Initialized
DEBUG - 2019-01-07 06:39:09 609400 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:39:09 609523 --> Input Class Initialized
INFO - 2019-01-07 06:39:09 610136 --> Language Class Initialized
ERROR - 2019-01-07 06:39:09 611013 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:39:09 613586 --> Router Class Initialized
INFO - 2019-01-07 06:39:09 615756 --> Output Class Initialized
INFO - 2019-01-07 06:39:09 617543 --> Security Class Initialized
INFO - 2019-01-07 06:39:09 624609 --> Config Class Initialized
INFO - 2019-01-07 06:39:09 624870 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:39:09 626595 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:39:09 626701 --> Input Class Initialized
INFO - 2019-01-07 06:39:09 627227 --> Language Class Initialized
ERROR - 2019-01-07 06:39:09 628184 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-07 06:39:09 630820 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:39:09 630927 --> Utf8 Class Initialized
INFO - 2019-01-07 06:39:09 632491 --> URI Class Initialized
INFO - 2019-01-07 06:39:09 636567 --> Router Class Initialized
INFO - 2019-01-07 06:39:09 639235 --> Output Class Initialized
INFO - 2019-01-07 06:39:09 641274 --> Security Class Initialized
DEBUG - 2019-01-07 06:39:09 643259 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:39:09 643393 --> Input Class Initialized
INFO - 2019-01-07 06:39:09 644066 --> Language Class Initialized
ERROR - 2019-01-07 06:39:09 645142 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:39:09 727116 --> Config Class Initialized
INFO - 2019-01-07 06:39:09 727255 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:39:09 729110 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:39:09 729217 --> Utf8 Class Initialized
INFO - 2019-01-07 06:39:09 730228 --> URI Class Initialized
INFO - 2019-01-07 06:39:09 734118 --> Router Class Initialized
INFO - 2019-01-07 06:39:09 737240 --> Config Class Initialized
INFO - 2019-01-07 06:39:09 737409 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:39:09 741014 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:39:09 741178 --> Utf8 Class Initialized
INFO - 2019-01-07 06:39:09 743597 --> URI Class Initialized
INFO - 2019-01-07 06:39:09 748250 --> Output Class Initialized
INFO - 2019-01-07 06:39:09 750878 --> Security Class Initialized
DEBUG - 2019-01-07 06:39:09 753838 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:39:09 753981 --> Input Class Initialized
INFO - 2019-01-07 06:39:09 759718 --> Router Class Initialized
INFO - 2019-01-07 06:39:09 762797 --> Output Class Initialized
INFO - 2019-01-07 06:39:09 764736 --> Language Class Initialized
ERROR - 2019-01-07 06:39:09 765974 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:39:09 768980 --> Security Class Initialized
DEBUG - 2019-01-07 06:39:09 771298 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:39:09 771456 --> Input Class Initialized
INFO - 2019-01-07 06:39:09 772162 --> Language Class Initialized
ERROR - 2019-01-07 06:39:09 773277 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:39:09 987663 --> Config Class Initialized
INFO - 2019-01-07 06:39:09 987931 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:39:09 990035 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:39:09 990140 --> Utf8 Class Initialized
INFO - 2019-01-07 06:39:09 991588 --> URI Class Initialized
INFO - 2019-01-07 06:39:09 994170 --> Router Class Initialized
INFO - 2019-01-07 06:39:10 000657 --> Output Class Initialized
INFO - 2019-01-07 06:39:10 002186 --> Security Class Initialized
DEBUG - 2019-01-07 06:39:10 005605 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:39:10 005711 --> Input Class Initialized
INFO - 2019-01-07 06:39:10 006217 --> Language Class Initialized
INFO - 2019-01-07 06:39:10 011956 --> Loader Class Initialized
INFO - 2019-01-07 06:39:10 013701 --> Helper loaded: url_helper
INFO - 2019-01-07 06:39:10 014384 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:09:10 021960 --> Database Driver Class Initialized
INFO - 2019-01-07 12:09:10 028127 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:09:10 029262 --> Controller Class Initialized
INFO - 2019-01-07 12:09:10 030035 --> Final output sent to browser
DEBUG - 2019-01-07 12:09:10 030128 --> Total execution time: 0.0443
INFO - 2019-01-07 06:39:13 551222 --> Config Class Initialized
INFO - 2019-01-07 06:39:13 551392 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:39:13 553847 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:39:13 553986 --> Utf8 Class Initialized
INFO - 2019-01-07 06:39:13 555319 --> URI Class Initialized
INFO - 2019-01-07 06:39:13 558717 --> Router Class Initialized
INFO - 2019-01-07 06:39:13 561248 --> Output Class Initialized
INFO - 2019-01-07 06:39:13 563173 --> Security Class Initialized
DEBUG - 2019-01-07 06:39:13 565048 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:39:13 565186 --> Input Class Initialized
INFO - 2019-01-07 06:39:13 565828 --> Language Class Initialized
ERROR - 2019-01-07 06:39:13 566884 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-07 06:42:10 346353 --> Config Class Initialized
INFO - 2019-01-07 06:42:10 346651 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:42:10 349025 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:42:10 349142 --> Utf8 Class Initialized
INFO - 2019-01-07 06:42:10 350509 --> URI Class Initialized
INFO - 2019-01-07 06:42:10 354329 --> Router Class Initialized
INFO - 2019-01-07 06:42:10 356643 --> Output Class Initialized
INFO - 2019-01-07 06:42:10 358264 --> Security Class Initialized
INFO - 2019-01-07 06:42:10 368489 --> Config Class Initialized
INFO - 2019-01-07 06:42:10 368760 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:42:10 370958 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:42:10 371071 --> Utf8 Class Initialized
INFO - 2019-01-07 06:42:10 372414 --> URI Class Initialized
INFO - 2019-01-07 06:42:10 376233 --> Router Class Initialized
DEBUG - 2019-01-07 06:42:10 379990 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:42:10 380105 --> Input Class Initialized
INFO - 2019-01-07 06:42:10 380678 --> Language Class Initialized
ERROR - 2019-01-07 06:42:10 381591 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 06:42:10 383543 --> Output Class Initialized
INFO - 2019-01-07 06:42:10 385245 --> Security Class Initialized
DEBUG - 2019-01-07 06:42:10 386877 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:42:10 386987 --> Input Class Initialized
INFO - 2019-01-07 06:42:10 387538 --> Language Class Initialized
ERROR - 2019-01-07 06:42:10 388442 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 06:43:49 530659 --> Config Class Initialized
INFO - 2019-01-07 06:43:49 530965 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:43:49 533214 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:43:49 533325 --> Utf8 Class Initialized
INFO - 2019-01-07 06:43:49 534559 --> URI Class Initialized
DEBUG - 2019-01-07 06:43:49 536654 --> No URI present. Default controller set.
INFO - 2019-01-07 06:43:49 536760 --> Router Class Initialized
INFO - 2019-01-07 06:43:49 538913 --> Output Class Initialized
INFO - 2019-01-07 06:43:49 540530 --> Security Class Initialized
DEBUG - 2019-01-07 06:43:49 542186 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:43:49 542294 --> Input Class Initialized
INFO - 2019-01-07 06:43:49 542839 --> Language Class Initialized
INFO - 2019-01-07 06:43:49 546154 --> Loader Class Initialized
INFO - 2019-01-07 06:43:49 547677 --> Helper loaded: url_helper
INFO - 2019-01-07 06:43:49 548444 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:13:49 556936 --> Database Driver Class Initialized
INFO - 2019-01-07 12:13:49 564042 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:13:49 565351 --> Controller Class Initialized
INFO - 2019-01-07 12:13:49 566000 --> Parser Class Initialized
INFO - 2019-01-07 12:13:49 566937 --> Helper loaded: html_helper
INFO - 2019-01-07 12:13:49 567962 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 12:13:49 570586 --> Model Class Initialized
DEBUG - 2019-01-07 12:13:49 703460 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 12:13:49 712488 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 12:13:49 713253 --> Model Class Initialized
DEBUG - 2019-01-07 12:13:49 713915 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 12:13:49 716701 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 12:13:49 718341 --> Helper loaded: file_helper
DEBUG - 2019-01-07 12:13:49 718508 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 12:13:49 722001 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 723576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 809565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 812608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 817070 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 817730 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 818696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 820085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 823959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 824556 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 825448 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 826663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 829905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 830341 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 831135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 832571 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 836100 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 836617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 837367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 838773 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 842322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 842844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 843739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 844795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 848165 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 848726 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 849611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 850713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 854006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 854485 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 855261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 856496 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 859823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 860277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 861071 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 862109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 865561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 866066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 866893 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 868014 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 871489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 871983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 872853 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 874006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 877408 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 877902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 878767 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 903182 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 906981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 907516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 908391 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 909405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 912856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 913352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 914225 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 915474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 918950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 919445 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 920325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 921988 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 925499 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 925973 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:49 926846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 003175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 005652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 005968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 006617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 007643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 009531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 009788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 010236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 011099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 011799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 012469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 013112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 013762 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 014413 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 015058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 015705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 018779 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 021630 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 102914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 108570 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 109239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 110620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 111174 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 111716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 113310 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 113842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 114281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 114732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 115159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 115653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 116079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 116516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 116941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 117381 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 120671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 122886 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 123156 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 123656 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 302898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 305242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 305533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 306039 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 307085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 309242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 309518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 309999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 311017 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 312868 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 313122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 313622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 314522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 317188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 317470 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 317960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 318837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 320593 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 320837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 321316 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 322952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 323932 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 325886 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 326905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 328655 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 329518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 331326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 332268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 333971 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 403083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 405257 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:13:50 406344 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 12:13:50 408226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 409374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 409636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:13:50 411454 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:13:50 411868 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 12:13:50 420284 --> Final output sent to browser
DEBUG - 2019-01-07 12:13:50 420393 --> Total execution time: 0.8839
INFO - 2019-01-07 06:43:51 288928 --> Config Class Initialized
INFO - 2019-01-07 06:43:51 289149 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:43:51 290868 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:43:51 290955 --> Utf8 Class Initialized
INFO - 2019-01-07 06:43:51 292036 --> URI Class Initialized
INFO - 2019-01-07 06:43:51 295403 --> Router Class Initialized
INFO - 2019-01-07 06:43:51 298305 --> Output Class Initialized
INFO - 2019-01-07 06:43:51 300246 --> Security Class Initialized
DEBUG - 2019-01-07 06:43:51 302104 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:43:51 302191 --> Input Class Initialized
INFO - 2019-01-07 06:43:51 302634 --> Language Class Initialized
ERROR - 2019-01-07 06:43:51 303704 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 06:43:52 199645 --> Config Class Initialized
INFO - 2019-01-07 06:43:52 200021 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:43:52 202158 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:43:52 202348 --> Utf8 Class Initialized
INFO - 2019-01-07 06:43:52 203943 --> URI Class Initialized
INFO - 2019-01-07 06:43:52 207860 --> Router Class Initialized
INFO - 2019-01-07 06:43:52 210043 --> Output Class Initialized
INFO - 2019-01-07 06:43:52 211584 --> Security Class Initialized
DEBUG - 2019-01-07 06:43:52 213268 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:43:52 213370 --> Input Class Initialized
INFO - 2019-01-07 06:43:52 213872 --> Language Class Initialized
ERROR - 2019-01-07 06:43:52 214685 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 06:43:52 421713 --> Config Class Initialized
INFO - 2019-01-07 06:43:52 421885 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:43:52 425008 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:43:52 425152 --> Utf8 Class Initialized
INFO - 2019-01-07 06:43:52 426955 --> URI Class Initialized
INFO - 2019-01-07 06:43:52 431830 --> Router Class Initialized
INFO - 2019-01-07 06:43:52 433773 --> Output Class Initialized
INFO - 2019-01-07 06:43:52 435225 --> Security Class Initialized
DEBUG - 2019-01-07 06:43:52 437447 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:43:52 437557 --> Input Class Initialized
INFO - 2019-01-07 06:43:52 438034 --> Language Class Initialized
ERROR - 2019-01-07 06:43:52 439265 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:43:52 540260 --> Config Class Initialized
INFO - 2019-01-07 06:43:52 540396 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:43:52 542649 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:43:52 542757 --> Utf8 Class Initialized
INFO - 2019-01-07 06:43:52 543993 --> URI Class Initialized
INFO - 2019-01-07 06:43:52 547096 --> Router Class Initialized
INFO - 2019-01-07 06:43:52 549381 --> Output Class Initialized
INFO - 2019-01-07 06:43:52 551095 --> Security Class Initialized
DEBUG - 2019-01-07 06:43:52 552853 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:43:52 552994 --> Input Class Initialized
INFO - 2019-01-07 06:43:52 553527 --> Language Class Initialized
ERROR - 2019-01-07 06:43:52 554379 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:43:52 710880 --> Config Class Initialized
INFO - 2019-01-07 06:43:52 711074 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:43:52 714052 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:43:52 714167 --> Utf8 Class Initialized
INFO - 2019-01-07 06:43:52 715555 --> URI Class Initialized
INFO - 2019-01-07 06:43:52 719877 --> Router Class Initialized
INFO - 2019-01-07 06:43:52 722220 --> Output Class Initialized
INFO - 2019-01-07 06:43:52 723648 --> Security Class Initialized
DEBUG - 2019-01-07 06:43:52 724798 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:43:52 724909 --> Input Class Initialized
INFO - 2019-01-07 06:43:52 725294 --> Language Class Initialized
ERROR - 2019-01-07 06:43:52 725934 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:43:52 736640 --> Config Class Initialized
INFO - 2019-01-07 06:43:52 736769 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:43:52 738723 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:43:52 738831 --> Utf8 Class Initialized
INFO - 2019-01-07 06:43:52 740055 --> URI Class Initialized
INFO - 2019-01-07 06:43:52 742736 --> Router Class Initialized
INFO - 2019-01-07 06:43:52 744739 --> Output Class Initialized
INFO - 2019-01-07 06:43:52 746212 --> Security Class Initialized
DEBUG - 2019-01-07 06:43:52 747678 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:43:52 747787 --> Input Class Initialized
INFO - 2019-01-07 06:43:52 748279 --> Language Class Initialized
ERROR - 2019-01-07 06:43:52 749092 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:43:52 765784 --> Config Class Initialized
INFO - 2019-01-07 06:43:52 766092 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:43:52 768704 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:43:52 768847 --> Utf8 Class Initialized
INFO - 2019-01-07 06:43:52 770261 --> URI Class Initialized
INFO - 2019-01-07 06:43:52 776222 --> Router Class Initialized
INFO - 2019-01-07 06:43:52 778904 --> Output Class Initialized
INFO - 2019-01-07 06:43:52 780515 --> Security Class Initialized
DEBUG - 2019-01-07 06:43:52 782099 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:43:52 782207 --> Input Class Initialized
INFO - 2019-01-07 06:43:52 782752 --> Language Class Initialized
ERROR - 2019-01-07 06:43:52 783634 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:43:52 850838 --> Config Class Initialized
INFO - 2019-01-07 06:43:52 850975 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:43:52 853174 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:43:52 853283 --> Utf8 Class Initialized
INFO - 2019-01-07 06:43:52 854584 --> URI Class Initialized
INFO - 2019-01-07 06:43:52 858027 --> Router Class Initialized
INFO - 2019-01-07 06:43:52 860522 --> Output Class Initialized
INFO - 2019-01-07 06:43:52 862137 --> Security Class Initialized
DEBUG - 2019-01-07 06:43:52 863363 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:43:52 863455 --> Input Class Initialized
INFO - 2019-01-07 06:43:52 863970 --> Language Class Initialized
ERROR - 2019-01-07 06:43:52 864698 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:43:52 887764 --> Config Class Initialized
INFO - 2019-01-07 06:43:52 887896 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:43:52 890117 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:43:52 890223 --> Utf8 Class Initialized
INFO - 2019-01-07 06:43:52 891364 --> URI Class Initialized
INFO - 2019-01-07 06:43:52 895216 --> Router Class Initialized
INFO - 2019-01-07 06:43:52 897646 --> Output Class Initialized
INFO - 2019-01-07 06:43:52 900067 --> Security Class Initialized
DEBUG - 2019-01-07 06:43:52 902039 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:43:52 902142 --> Input Class Initialized
INFO - 2019-01-07 06:43:52 902730 --> Language Class Initialized
ERROR - 2019-01-07 06:43:52 904272 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:43:53 474363 --> Config Class Initialized
INFO - 2019-01-07 06:43:53 474476 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:43:53 475718 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:43:53 475789 --> Utf8 Class Initialized
INFO - 2019-01-07 06:43:53 476504 --> URI Class Initialized
INFO - 2019-01-07 06:43:53 477874 --> Router Class Initialized
INFO - 2019-01-07 06:43:53 479227 --> Output Class Initialized
INFO - 2019-01-07 06:43:53 480225 --> Security Class Initialized
DEBUG - 2019-01-07 06:43:53 481256 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:43:53 481328 --> Input Class Initialized
INFO - 2019-01-07 06:43:53 481673 --> Language Class Initialized
INFO - 2019-01-07 06:43:53 485752 --> Loader Class Initialized
INFO - 2019-01-07 06:43:53 486721 --> Helper loaded: url_helper
INFO - 2019-01-07 06:43:53 487196 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:13:53 492652 --> Database Driver Class Initialized
INFO - 2019-01-07 12:13:53 497349 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:13:53 498176 --> Controller Class Initialized
INFO - 2019-01-07 12:13:53 498761 --> Final output sent to browser
DEBUG - 2019-01-07 12:13:53 498827 --> Total execution time: 0.0254
INFO - 2019-01-07 06:47:28 710402 --> Config Class Initialized
INFO - 2019-01-07 06:47:28 710828 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:47:28 723761 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:47:28 723921 --> Utf8 Class Initialized
INFO - 2019-01-07 06:47:28 725636 --> URI Class Initialized
INFO - 2019-01-07 06:47:28 735541 --> Config Class Initialized
INFO - 2019-01-07 06:47:28 735877 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:47:28 738599 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:47:28 738735 --> Utf8 Class Initialized
INFO - 2019-01-07 06:47:28 740387 --> URI Class Initialized
INFO - 2019-01-07 06:47:28 744398 --> Router Class Initialized
INFO - 2019-01-07 06:47:28 747206 --> Output Class Initialized
INFO - 2019-01-07 06:47:28 749300 --> Security Class Initialized
DEBUG - 2019-01-07 06:47:28 751312 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:47:28 761498 --> Input Class Initialized
INFO - 2019-01-07 06:47:28 763120 --> Language Class Initialized
ERROR - 2019-01-07 06:47:28 765741 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 06:47:28 771653 --> Router Class Initialized
INFO - 2019-01-07 06:47:28 779948 --> Output Class Initialized
INFO - 2019-01-07 06:47:28 785021 --> Security Class Initialized
DEBUG - 2019-01-07 06:47:28 787019 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:47:28 787157 --> Input Class Initialized
INFO - 2019-01-07 06:47:28 787833 --> Language Class Initialized
ERROR - 2019-01-07 06:47:28 788935 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 06:56:18 485193 --> Config Class Initialized
INFO - 2019-01-07 06:56:18 485579 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:56:18 488157 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:56:18 488266 --> Utf8 Class Initialized
INFO - 2019-01-07 06:56:18 489590 --> URI Class Initialized
DEBUG - 2019-01-07 06:56:18 492285 --> No URI present. Default controller set.
INFO - 2019-01-07 06:56:18 492465 --> Router Class Initialized
INFO - 2019-01-07 06:56:18 495059 --> Output Class Initialized
INFO - 2019-01-07 06:56:18 496788 --> Security Class Initialized
DEBUG - 2019-01-07 06:56:18 498605 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:56:18 498719 --> Input Class Initialized
INFO - 2019-01-07 06:56:18 499351 --> Language Class Initialized
INFO - 2019-01-07 06:56:18 502543 --> Loader Class Initialized
INFO - 2019-01-07 06:56:18 503951 --> Helper loaded: url_helper
INFO - 2019-01-07 06:56:18 504690 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:26:18 513144 --> Database Driver Class Initialized
INFO - 2019-01-07 12:26:18 520234 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:26:18 521498 --> Controller Class Initialized
INFO - 2019-01-07 12:26:18 522130 --> Parser Class Initialized
INFO - 2019-01-07 12:26:18 523052 --> Helper loaded: html_helper
INFO - 2019-01-07 12:26:18 524068 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 12:26:18 526663 --> Model Class Initialized
DEBUG - 2019-01-07 12:26:18 539757 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 12:26:18 546421 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 12:26:18 547208 --> Model Class Initialized
DEBUG - 2019-01-07 12:26:18 547833 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 12:26:18 551062 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 12:26:18 553203 --> Helper loaded: file_helper
DEBUG - 2019-01-07 12:26:18 553375 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 12:26:18 557739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 559978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 571136 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 573348 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 576268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 576702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 577366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 578663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 581207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 581615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 582251 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 583086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 585764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 586159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 587044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 587986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 590815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 591336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 592024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 592941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 595732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 596132 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 596823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 597722 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 600577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 600970 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 601671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 602780 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 609611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 610200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 611144 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 612279 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 617625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 618374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 619821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 621120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 627084 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 627651 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 628912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 630750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 637211 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 638149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 639424 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 641104 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 646265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 647116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 649207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 650787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 657466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 658654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 660170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 661576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 668220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 673736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 675211 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 703557 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 706615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 706907 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 707395 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 708441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 710319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 710596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 711067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 711960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 713785 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 714040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 714524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 715564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 717401 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 717672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 718138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 719090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 719916 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 720765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 721565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 722457 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 723129 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 723823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 725776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 726399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 727178 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 728046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 728768 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 729487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 730214 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 730921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 731667 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 732418 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 732884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 733340 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 733810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 734262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 734771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 735215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 735678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 736124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 736603 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 737870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 739897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 740148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 740657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 741419 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 743124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 743390 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 743899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 744551 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 746205 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 746459 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 746943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 747664 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 749366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 749629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 750118 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 750751 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 752422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 752676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 753192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 753856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 755538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 755788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 756278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 757951 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 758626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 760339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 760992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 762660 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 763304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 765017 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 765810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 767491 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 768111 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 769784 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:26:18 770436 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 12:26:18 772203 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 773245 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 773510 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:26:18 775155 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:26:18 775578 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 12:26:18 783673 --> Final output sent to browser
DEBUG - 2019-01-07 12:26:18 783750 --> Total execution time: 0.2934
INFO - 2019-01-07 06:56:19 049523 --> Config Class Initialized
INFO - 2019-01-07 06:56:19 049743 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:56:19 052887 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:56:19 052988 --> Utf8 Class Initialized
INFO - 2019-01-07 06:56:19 053988 --> URI Class Initialized
INFO - 2019-01-07 06:56:19 057151 --> Router Class Initialized
INFO - 2019-01-07 06:56:19 058985 --> Output Class Initialized
INFO - 2019-01-07 06:56:19 060417 --> Security Class Initialized
DEBUG - 2019-01-07 06:56:19 062092 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:56:19 062189 --> Input Class Initialized
INFO - 2019-01-07 06:56:19 062663 --> Language Class Initialized
ERROR - 2019-01-07 06:56:19 063463 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:56:19 077920 --> Config Class Initialized
INFO - 2019-01-07 06:56:19 078114 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:56:19 079555 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:56:19 079628 --> Utf8 Class Initialized
INFO - 2019-01-07 06:56:19 080512 --> URI Class Initialized
INFO - 2019-01-07 06:56:19 082931 --> Router Class Initialized
INFO - 2019-01-07 06:56:19 084367 --> Output Class Initialized
INFO - 2019-01-07 06:56:19 085405 --> Security Class Initialized
DEBUG - 2019-01-07 06:56:19 086436 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:56:19 086519 --> Input Class Initialized
INFO - 2019-01-07 06:56:19 086868 --> Language Class Initialized
ERROR - 2019-01-07 06:56:19 087450 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:56:19 162761 --> Config Class Initialized
INFO - 2019-01-07 06:56:19 162925 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:56:19 165169 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:56:19 165270 --> Utf8 Class Initialized
INFO - 2019-01-07 06:56:19 166213 --> URI Class Initialized
INFO - 2019-01-07 06:56:19 168780 --> Router Class Initialized
INFO - 2019-01-07 06:56:19 170562 --> Output Class Initialized
INFO - 2019-01-07 06:56:19 171950 --> Security Class Initialized
DEBUG - 2019-01-07 06:56:19 173238 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:56:19 173335 --> Input Class Initialized
INFO - 2019-01-07 06:56:19 173790 --> Language Class Initialized
ERROR - 2019-01-07 06:56:19 174962 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:56:19 192116 --> Config Class Initialized
INFO - 2019-01-07 06:56:19 192235 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:56:19 193977 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:56:19 194075 --> Utf8 Class Initialized
INFO - 2019-01-07 06:56:19 195209 --> URI Class Initialized
INFO - 2019-01-07 06:56:19 197552 --> Router Class Initialized
INFO - 2019-01-07 06:56:19 199492 --> Output Class Initialized
INFO - 2019-01-07 06:56:19 200948 --> Security Class Initialized
DEBUG - 2019-01-07 06:56:19 202310 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:56:19 202454 --> Input Class Initialized
INFO - 2019-01-07 06:56:19 203103 --> Language Class Initialized
ERROR - 2019-01-07 06:56:19 204257 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:56:19 287933 --> Config Class Initialized
INFO - 2019-01-07 06:56:19 288052 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:56:19 302831 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:56:19 302984 --> Utf8 Class Initialized
INFO - 2019-01-07 06:56:19 304356 --> URI Class Initialized
INFO - 2019-01-07 06:56:19 329854 --> Config Class Initialized
INFO - 2019-01-07 06:56:19 330125 --> Hooks Class Initialized
INFO - 2019-01-07 06:56:19 344620 --> Router Class Initialized
INFO - 2019-01-07 06:56:19 347167 --> Output Class Initialized
INFO - 2019-01-07 06:56:19 349071 --> Security Class Initialized
DEBUG - 2019-01-07 06:56:19 350348 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:56:19 350508 --> Utf8 Class Initialized
INFO - 2019-01-07 06:56:19 351818 --> URI Class Initialized
INFO - 2019-01-07 06:56:19 354327 --> Router Class Initialized
INFO - 2019-01-07 06:56:19 359968 --> Config Class Initialized
INFO - 2019-01-07 06:56:19 360296 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:56:19 363092 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:56:19 363229 --> Utf8 Class Initialized
DEBUG - 2019-01-07 06:56:19 366101 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:56:19 366241 --> Input Class Initialized
INFO - 2019-01-07 06:56:19 366894 --> Language Class Initialized
ERROR - 2019-01-07 06:56:19 368855 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 06:56:19 381458 --> Config Class Initialized
INFO - 2019-01-07 06:56:19 381954 --> Hooks Class Initialized
INFO - 2019-01-07 06:56:19 384263 --> URI Class Initialized
INFO - 2019-01-07 06:56:19 388745 --> Output Class Initialized
INFO - 2019-01-07 06:56:19 390753 --> Security Class Initialized
DEBUG - 2019-01-07 06:56:19 400479 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:56:19 400619 --> Utf8 Class Initialized
INFO - 2019-01-07 06:56:19 402273 --> URI Class Initialized
INFO - 2019-01-07 06:56:19 406560 --> Router Class Initialized
DEBUG - 2019-01-07 06:56:19 409748 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:56:19 409883 --> Input Class Initialized
INFO - 2019-01-07 06:56:19 410550 --> Language Class Initialized
INFO - 2019-01-07 06:56:19 417218 --> Config Class Initialized
INFO - 2019-01-07 06:56:19 417553 --> Hooks Class Initialized
INFO - 2019-01-07 06:56:19 422043 --> Router Class Initialized
INFO - 2019-01-07 06:56:19 424365 --> Output Class Initialized
INFO - 2019-01-07 06:56:19 426390 --> Security Class Initialized
DEBUG - 2019-01-07 06:56:19 428395 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:56:19 436896 --> Input Class Initialized
INFO - 2019-01-07 06:56:19 437591 --> Language Class Initialized
ERROR - 2019-01-07 06:56:19 438707 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-07 06:56:19 440788 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:56:19 440948 --> Utf8 Class Initialized
INFO - 2019-01-07 06:56:19 442652 --> URI Class Initialized
INFO - 2019-01-07 06:56:19 447402 --> Router Class Initialized
INFO - 2019-01-07 06:56:19 448715 --> Loader Class Initialized
INFO - 2019-01-07 06:56:19 450560 --> Helper loaded: url_helper
INFO - 2019-01-07 06:56:19 451495 --> Helper loaded: utility_helper
INFO - 2019-01-07 06:56:19 455430 --> Output Class Initialized
INFO - 2019-01-07 06:56:19 457467 --> Security Class Initialized
DEBUG - 2019-01-07 06:56:19 460072 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:56:19 460207 --> Input Class Initialized
INFO - 2019-01-07 06:56:19 460885 --> Language Class Initialized
ERROR - 2019-01-07 06:56:19 461988 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 12:26:19 469074 --> Database Driver Class Initialized
INFO - 2019-01-07 06:56:19 472908 --> Output Class Initialized
INFO - 2019-01-07 06:56:19 475044 --> Security Class Initialized
DEBUG - 2019-01-07 06:56:19 477081 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:56:19 477217 --> Input Class Initialized
INFO - 2019-01-07 06:56:19 477900 --> Language Class Initialized
ERROR - 2019-01-07 06:56:19 490135 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 12:26:19 500199 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:26:19 501812 --> Controller Class Initialized
INFO - 2019-01-07 12:26:19 502849 --> Final output sent to browser
DEBUG - 2019-01-07 12:26:19 502975 --> Total execution time: 0.1948
INFO - 2019-01-07 06:56:19 935389 --> Config Class Initialized
INFO - 2019-01-07 06:56:19 935569 --> Hooks Class Initialized
DEBUG - 2019-01-07 06:56:19 937875 --> UTF-8 Support Enabled
INFO - 2019-01-07 06:56:19 938009 --> Utf8 Class Initialized
INFO - 2019-01-07 06:56:19 939366 --> URI Class Initialized
INFO - 2019-01-07 06:56:19 942636 --> Router Class Initialized
INFO - 2019-01-07 06:56:19 945071 --> Output Class Initialized
INFO - 2019-01-07 06:56:19 946966 --> Security Class Initialized
DEBUG - 2019-01-07 06:56:19 948790 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 06:56:19 948921 --> Input Class Initialized
INFO - 2019-01-07 06:56:19 949549 --> Language Class Initialized
ERROR - 2019-01-07 06:56:19 950593 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 07:00:40 082822 --> Config Class Initialized
INFO - 2019-01-07 07:00:40 083030 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:00:40 084579 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:00:40 084661 --> Utf8 Class Initialized
INFO - 2019-01-07 07:00:40 085577 --> URI Class Initialized
DEBUG - 2019-01-07 07:00:40 087014 --> No URI present. Default controller set.
INFO - 2019-01-07 07:00:40 087094 --> Router Class Initialized
INFO - 2019-01-07 07:00:40 088648 --> Output Class Initialized
INFO - 2019-01-07 07:00:40 089786 --> Security Class Initialized
DEBUG - 2019-01-07 07:00:40 090924 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:00:40 091001 --> Input Class Initialized
INFO - 2019-01-07 07:00:40 091377 --> Language Class Initialized
INFO - 2019-01-07 07:00:40 093709 --> Loader Class Initialized
INFO - 2019-01-07 07:00:40 094723 --> Helper loaded: url_helper
INFO - 2019-01-07 07:00:40 095242 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:30:40 101170 --> Database Driver Class Initialized
INFO - 2019-01-07 12:30:40 106944 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:30:40 107848 --> Controller Class Initialized
INFO - 2019-01-07 12:30:40 108298 --> Parser Class Initialized
INFO - 2019-01-07 12:30:40 108963 --> Helper loaded: html_helper
INFO - 2019-01-07 12:30:40 109711 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 12:30:40 111582 --> Model Class Initialized
DEBUG - 2019-01-07 12:30:40 304476 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 12:30:40 311223 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 12:30:40 312114 --> Model Class Initialized
DEBUG - 2019-01-07 12:30:40 312860 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 12:30:40 316498 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 12:30:40 318727 --> Helper loaded: file_helper
DEBUG - 2019-01-07 12:30:40 318921 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 12:30:40 326858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 403678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 510540 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 514661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 517718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 518177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 518975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 520107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 523034 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 523488 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 524220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 526458 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 529546 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 529972 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 530730 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 532077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 535118 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 535587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 536339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 537451 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 540458 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 540925 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 541712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 542783 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 546065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 546540 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 547311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 548383 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 551506 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 551951 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 552757 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 553822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 557019 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 557564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 558974 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 560107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 563338 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 563806 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 564629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 565808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 569041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 569534 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 570358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 571552 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 574812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 575264 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 576129 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 577244 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 580461 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 580923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 581808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 603058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 606813 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 607280 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 608161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 609349 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 612566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 613022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 613899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 615010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 618241 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 618721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 619609 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 621051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 628386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 629261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 630769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 632272 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 635030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 635489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 636287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 638128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 639086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 639875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 640626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:40 920101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 011260 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 012731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 014010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 015935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 016828 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 017647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 018457 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 019242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 020034 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 020816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 021608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 022794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 023669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 024525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 025358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 026216 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 027154 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 028063 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 028939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 029798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 030703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 031672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 037118 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 038131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 039252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 040466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 043827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 044301 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 045233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 046320 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 050714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 051522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 052455 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 053534 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 057353 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 057857 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 058809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 103214 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 112962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 114466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 116322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 117944 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 130095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 131843 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 135771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 140531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 204346 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 208432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 210725 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 216809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 218030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 221360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 222460 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 226911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 227994 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 232228 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:30:41 233395 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 12:30:41 236612 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 238647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 239106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:30:41 242290 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:30:41 243083 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 12:30:41 253463 --> Final output sent to browser
DEBUG - 2019-01-07 12:30:41 253699 --> Total execution time: 1.1629
INFO - 2019-01-07 07:00:41 516810 --> Config Class Initialized
INFO - 2019-01-07 07:00:41 516988 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:00:41 519506 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:00:41 519644 --> Utf8 Class Initialized
INFO - 2019-01-07 07:00:41 521125 --> URI Class Initialized
INFO - 2019-01-07 07:00:41 525614 --> Router Class Initialized
INFO - 2019-01-07 07:00:41 528198 --> Output Class Initialized
INFO - 2019-01-07 07:00:41 530128 --> Security Class Initialized
DEBUG - 2019-01-07 07:00:41 531995 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:00:41 532130 --> Input Class Initialized
INFO - 2019-01-07 07:00:41 532802 --> Language Class Initialized
ERROR - 2019-01-07 07:00:41 533929 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:00:41 606323 --> Config Class Initialized
INFO - 2019-01-07 07:00:41 606775 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:00:41 610831 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:00:41 611017 --> Utf8 Class Initialized
INFO - 2019-01-07 07:00:41 613981 --> URI Class Initialized
INFO - 2019-01-07 07:00:41 622773 --> Router Class Initialized
INFO - 2019-01-07 07:00:41 625680 --> Output Class Initialized
INFO - 2019-01-07 07:00:41 627731 --> Security Class Initialized
DEBUG - 2019-01-07 07:00:41 629739 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:00:41 629878 --> Input Class Initialized
INFO - 2019-01-07 07:00:41 630557 --> Language Class Initialized
ERROR - 2019-01-07 07:00:41 631673 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:00:41 688465 --> Config Class Initialized
INFO - 2019-01-07 07:00:41 688815 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:00:41 691536 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:00:41 691673 --> Utf8 Class Initialized
INFO - 2019-01-07 07:00:41 693388 --> URI Class Initialized
INFO - 2019-01-07 07:00:41 698153 --> Router Class Initialized
INFO - 2019-01-07 07:00:41 700922 --> Output Class Initialized
INFO - 2019-01-07 07:00:41 702935 --> Security Class Initialized
DEBUG - 2019-01-07 07:00:41 704946 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:00:41 705082 --> Input Class Initialized
INFO - 2019-01-07 07:00:41 705761 --> Language Class Initialized
ERROR - 2019-01-07 07:00:41 706868 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:00:41 962205 --> Config Class Initialized
INFO - 2019-01-07 07:00:41 962369 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:00:41 964772 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:00:41 964909 --> Utf8 Class Initialized
INFO - 2019-01-07 07:00:41 980372 --> URI Class Initialized
INFO - 2019-01-07 07:00:41 983726 --> Router Class Initialized
INFO - 2019-01-07 07:00:41 986260 --> Output Class Initialized
INFO - 2019-01-07 07:00:41 987502 --> Config Class Initialized
INFO - 2019-01-07 07:00:41 987649 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:00:41 990040 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:00:41 990176 --> Utf8 Class Initialized
INFO - 2019-01-07 07:00:41 991518 --> URI Class Initialized
INFO - 2019-01-07 07:00:41 994390 --> Config Class Initialized
INFO - 2019-01-07 07:00:41 994556 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:00:41 996959 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:00:41 997095 --> Utf8 Class Initialized
INFO - 2019-01-07 07:00:41 998418 --> URI Class Initialized
INFO - 2019-01-07 07:00:42 002187 --> Security Class Initialized
DEBUG - 2019-01-07 07:00:42 004050 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:00:42 004184 --> Input Class Initialized
INFO - 2019-01-07 07:00:42 004878 --> Language Class Initialized
ERROR - 2019-01-07 07:00:42 005964 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:00:42 009390 --> Router Class Initialized
INFO - 2019-01-07 07:00:42 012164 --> Output Class Initialized
INFO - 2019-01-07 07:00:42 014933 --> Router Class Initialized
INFO - 2019-01-07 07:00:42 017685 --> Output Class Initialized
INFO - 2019-01-07 07:00:42 019653 --> Security Class Initialized
INFO - 2019-01-07 07:00:42 021218 --> Security Class Initialized
DEBUG - 2019-01-07 07:00:42 023206 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:00:42 023343 --> Input Class Initialized
INFO - 2019-01-07 07:00:42 024013 --> Language Class Initialized
ERROR - 2019-01-07 07:00:42 025080 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-07 07:00:42 028290 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:00:42 028455 --> Input Class Initialized
INFO - 2019-01-07 07:00:42 029128 --> Language Class Initialized
ERROR - 2019-01-07 07:00:42 030201 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:00:42 049355 --> Config Class Initialized
INFO - 2019-01-07 07:00:42 049913 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:00:42 052109 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:00:42 052233 --> Utf8 Class Initialized
INFO - 2019-01-07 07:00:42 053297 --> URI Class Initialized
INFO - 2019-01-07 07:00:42 055942 --> Router Class Initialized
INFO - 2019-01-07 07:00:42 057451 --> Output Class Initialized
INFO - 2019-01-07 07:00:42 058521 --> Security Class Initialized
DEBUG - 2019-01-07 07:00:42 059765 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:00:42 059842 --> Input Class Initialized
INFO - 2019-01-07 07:00:42 060199 --> Language Class Initialized
INFO - 2019-01-07 07:00:42 067915 --> Config Class Initialized
INFO - 2019-01-07 07:00:42 068103 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:00:42 069576 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:00:42 069652 --> Utf8 Class Initialized
INFO - 2019-01-07 07:00:42 070585 --> URI Class Initialized
INFO - 2019-01-07 07:00:42 073030 --> Router Class Initialized
INFO - 2019-01-07 07:00:42 075084 --> Output Class Initialized
INFO - 2019-01-07 07:00:42 076922 --> Security Class Initialized
DEBUG - 2019-01-07 07:00:42 078769 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:00:42 078880 --> Input Class Initialized
INFO - 2019-01-07 07:00:42 079530 --> Language Class Initialized
ERROR - 2019-01-07 07:00:42 082113 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:00:42 090456 --> Loader Class Initialized
INFO - 2019-01-07 07:00:42 092075 --> Helper loaded: url_helper
INFO - 2019-01-07 07:00:42 092772 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:30:42 100955 --> Database Driver Class Initialized
INFO - 2019-01-07 07:00:42 105366 --> Config Class Initialized
INFO - 2019-01-07 07:00:42 105582 --> Hooks Class Initialized
INFO - 2019-01-07 12:30:42 106400 --> Session: Class initialized using 'files' driver.
DEBUG - 2019-01-07 07:00:42 108422 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:00:42 108542 --> Utf8 Class Initialized
INFO - 2019-01-07 07:00:42 109786 --> URI Class Initialized
INFO - 2019-01-07 07:00:42 112555 --> Router Class Initialized
INFO - 2019-01-07 07:00:42 114517 --> Output Class Initialized
INFO - 2019-01-07 07:00:42 115497 --> Security Class Initialized
DEBUG - 2019-01-07 07:00:42 116534 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:00:42 116611 --> Input Class Initialized
INFO - 2019-01-07 07:00:42 117258 --> Language Class Initialized
INFO - 2019-01-07 12:30:42 118599 --> Controller Class Initialized
INFO - 2019-01-07 12:30:42 119858 --> Final output sent to browser
DEBUG - 2019-01-07 12:30:42 119995 --> Total execution time: 0.0531
ERROR - 2019-01-07 07:00:42 124051 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 07:00:42 337347 --> Config Class Initialized
INFO - 2019-01-07 07:00:42 337532 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:00:42 339867 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:00:42 340002 --> Utf8 Class Initialized
INFO - 2019-01-07 07:00:42 341321 --> URI Class Initialized
INFO - 2019-01-07 07:00:42 344664 --> Router Class Initialized
INFO - 2019-01-07 07:00:42 347130 --> Output Class Initialized
INFO - 2019-01-07 07:00:42 348985 --> Security Class Initialized
DEBUG - 2019-01-07 07:00:42 350806 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:00:42 350940 --> Input Class Initialized
INFO - 2019-01-07 07:00:42 351593 --> Language Class Initialized
ERROR - 2019-01-07 07:00:42 352613 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 07:00:42 959129 --> Config Class Initialized
INFO - 2019-01-07 07:00:42 959511 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:00:42 962294 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:00:42 962445 --> Utf8 Class Initialized
INFO - 2019-01-07 07:00:42 964135 --> URI Class Initialized
INFO - 2019-01-07 07:00:42 969003 --> Router Class Initialized
INFO - 2019-01-07 07:00:42 971978 --> Output Class Initialized
INFO - 2019-01-07 07:00:42 974200 --> Security Class Initialized
DEBUG - 2019-01-07 07:00:42 976278 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:00:42 976417 --> Input Class Initialized
INFO - 2019-01-07 07:00:42 977138 --> Language Class Initialized
ERROR - 2019-01-07 07:00:42 978257 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-07 07:07:45 128079 --> Config Class Initialized
INFO - 2019-01-07 07:07:45 128400 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:07:45 131272 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:07:45 131406 --> Utf8 Class Initialized
INFO - 2019-01-07 07:07:45 133039 --> URI Class Initialized
DEBUG - 2019-01-07 07:07:45 135848 --> No URI present. Default controller set.
INFO - 2019-01-07 07:07:45 135976 --> Router Class Initialized
INFO - 2019-01-07 07:07:45 138950 --> Output Class Initialized
INFO - 2019-01-07 07:07:45 141177 --> Security Class Initialized
DEBUG - 2019-01-07 07:07:45 142657 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:07:45 142751 --> Input Class Initialized
INFO - 2019-01-07 07:07:45 143202 --> Language Class Initialized
INFO - 2019-01-07 07:07:45 145942 --> Loader Class Initialized
INFO - 2019-01-07 07:07:45 147150 --> Helper loaded: url_helper
INFO - 2019-01-07 07:07:45 147787 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:37:45 154937 --> Database Driver Class Initialized
INFO - 2019-01-07 12:37:45 161252 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:37:45 162327 --> Controller Class Initialized
INFO - 2019-01-07 12:37:45 162873 --> Parser Class Initialized
INFO - 2019-01-07 12:37:45 163678 --> Helper loaded: html_helper
INFO - 2019-01-07 12:37:45 164591 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 12:37:45 166882 --> Model Class Initialized
DEBUG - 2019-01-07 12:37:45 176114 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 12:37:45 180177 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 12:37:45 180746 --> Model Class Initialized
DEBUG - 2019-01-07 12:37:45 181268 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 12:37:45 183659 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 12:37:45 185080 --> Helper loaded: file_helper
DEBUG - 2019-01-07 12:37:45 185209 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 12:37:45 188309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 189610 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 196731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 198389 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 200398 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 200716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 201219 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 201931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 203919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 204210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 204720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 205387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 207474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 207765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 208297 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 209012 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 211112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 211489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 212019 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 212693 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 214808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 215120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 215682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 216340 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 218478 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 218782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 219297 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 219942 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 223048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 223360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 223906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 224560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 226687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 227015 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 227561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 228197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 230304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 230626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 231183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 231795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 233920 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 234219 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 234787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 235399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 237587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 237894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 238459 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 239120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 241254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 241588 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 242285 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 242911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 245071 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 245373 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 245963 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 246611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 248764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 249068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 249660 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 250284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 252485 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 252798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 253369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 253998 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 256268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 256622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 257205 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 257837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 259995 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 260303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 260919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 261590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 262187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 262764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 263314 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 263864 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 264405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 264950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 265486 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 266010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 266586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 267146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 267683 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 268199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 268723 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 269259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 269789 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 270482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 271075 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 271652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 272209 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 272783 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 273416 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 273994 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 274564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 275145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 275737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 276338 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 278794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 279129 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 279769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 280352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 282568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 282883 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 283636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 284223 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 286412 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 286740 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 287358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 287995 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 290680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 291172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 292510 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 293466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 295659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 295972 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 296601 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 297323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 299516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 299832 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 300453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 302659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 303647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 310899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 311780 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 315498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 316307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 320760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 321692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 325498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 326168 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 328319 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:37:45 328943 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 12:37:45 331072 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 332405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 332727 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:37:45 334840 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:37:45 335359 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 12:37:45 343566 --> Final output sent to browser
DEBUG - 2019-01-07 12:37:45 343658 --> Total execution time: 0.2107
INFO - 2019-01-07 07:07:46 301285 --> Config Class Initialized
INFO - 2019-01-07 07:07:46 301639 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:07:46 304337 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:07:46 304488 --> Utf8 Class Initialized
INFO - 2019-01-07 07:07:46 306129 --> URI Class Initialized
INFO - 2019-01-07 07:07:46 310856 --> Router Class Initialized
INFO - 2019-01-07 07:07:46 313620 --> Output Class Initialized
INFO - 2019-01-07 07:07:46 315622 --> Security Class Initialized
DEBUG - 2019-01-07 07:07:46 317616 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:07:46 317751 --> Input Class Initialized
INFO - 2019-01-07 07:07:46 318408 --> Language Class Initialized
ERROR - 2019-01-07 07:07:46 319519 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 07:07:48 399951 --> Config Class Initialized
INFO - 2019-01-07 07:07:48 400125 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:07:48 403759 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:07:48 403908 --> Utf8 Class Initialized
INFO - 2019-01-07 07:07:48 406990 --> URI Class Initialized
INFO - 2019-01-07 07:07:48 412049 --> Router Class Initialized
INFO - 2019-01-07 07:07:48 414944 --> Output Class Initialized
INFO - 2019-01-07 07:07:48 416830 --> Security Class Initialized
DEBUG - 2019-01-07 07:07:48 418694 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:07:48 418886 --> Input Class Initialized
INFO - 2019-01-07 07:07:48 419832 --> Language Class Initialized
ERROR - 2019-01-07 07:07:48 420989 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:07:48 471766 --> Config Class Initialized
INFO - 2019-01-07 07:07:48 472234 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:07:48 476089 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:07:48 476243 --> Utf8 Class Initialized
INFO - 2019-01-07 07:07:48 478033 --> URI Class Initialized
INFO - 2019-01-07 07:07:48 482920 --> Router Class Initialized
INFO - 2019-01-07 07:07:48 485776 --> Output Class Initialized
INFO - 2019-01-07 07:07:48 487929 --> Security Class Initialized
DEBUG - 2019-01-07 07:07:48 489983 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:07:48 490149 --> Input Class Initialized
INFO - 2019-01-07 07:07:48 490925 --> Language Class Initialized
ERROR - 2019-01-07 07:07:48 492041 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:07:48 588974 --> Config Class Initialized
INFO - 2019-01-07 07:07:48 589139 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:07:48 591520 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:07:48 591659 --> Utf8 Class Initialized
INFO - 2019-01-07 07:07:48 592991 --> URI Class Initialized
INFO - 2019-01-07 07:07:48 598083 --> Router Class Initialized
INFO - 2019-01-07 07:07:48 602199 --> Output Class Initialized
INFO - 2019-01-07 07:07:48 604192 --> Security Class Initialized
DEBUG - 2019-01-07 07:07:48 606142 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:07:48 606278 --> Input Class Initialized
INFO - 2019-01-07 07:07:48 606986 --> Language Class Initialized
ERROR - 2019-01-07 07:07:48 608067 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 07:07:48 707259 --> Config Class Initialized
INFO - 2019-01-07 07:07:48 707470 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:07:48 713165 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:07:48 713340 --> Utf8 Class Initialized
INFO - 2019-01-07 07:07:48 716645 --> URI Class Initialized
INFO - 2019-01-07 07:07:48 727211 --> Router Class Initialized
INFO - 2019-01-07 07:07:48 729959 --> Output Class Initialized
INFO - 2019-01-07 07:07:48 731944 --> Security Class Initialized
DEBUG - 2019-01-07 07:07:48 734014 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:07:48 734150 --> Input Class Initialized
INFO - 2019-01-07 07:07:48 734870 --> Language Class Initialized
INFO - 2019-01-07 07:07:48 736675 --> Config Class Initialized
INFO - 2019-01-07 07:07:48 736820 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:07:48 739213 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:07:48 739356 --> Utf8 Class Initialized
INFO - 2019-01-07 07:07:48 742239 --> URI Class Initialized
ERROR - 2019-01-07 07:07:48 746673 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:07:48 754158 --> Router Class Initialized
INFO - 2019-01-07 07:07:48 759382 --> Output Class Initialized
INFO - 2019-01-07 07:07:48 761274 --> Security Class Initialized
DEBUG - 2019-01-07 07:07:48 763546 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:07:48 763731 --> Input Class Initialized
INFO - 2019-01-07 07:07:48 764651 --> Language Class Initialized
ERROR - 2019-01-07 07:07:48 766165 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:07:48 846908 --> Config Class Initialized
INFO - 2019-01-07 07:07:48 847069 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:07:48 849489 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:07:48 849639 --> Utf8 Class Initialized
INFO - 2019-01-07 07:07:48 850980 --> URI Class Initialized
INFO - 2019-01-07 07:07:48 854290 --> Router Class Initialized
INFO - 2019-01-07 07:07:48 856812 --> Output Class Initialized
INFO - 2019-01-07 07:07:48 858670 --> Security Class Initialized
DEBUG - 2019-01-07 07:07:48 860980 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:07:48 861114 --> Input Class Initialized
INFO - 2019-01-07 07:07:48 861757 --> Language Class Initialized
ERROR - 2019-01-07 07:07:48 862838 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:07:48 872441 --> Config Class Initialized
INFO - 2019-01-07 07:07:48 872608 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:07:48 874995 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:07:48 875133 --> Utf8 Class Initialized
INFO - 2019-01-07 07:07:48 876470 --> URI Class Initialized
INFO - 2019-01-07 07:07:48 879759 --> Router Class Initialized
INFO - 2019-01-07 07:07:48 882263 --> Output Class Initialized
INFO - 2019-01-07 07:07:48 884578 --> Security Class Initialized
DEBUG - 2019-01-07 07:07:48 887061 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:07:48 887243 --> Input Class Initialized
INFO - 2019-01-07 07:07:48 887932 --> Language Class Initialized
ERROR - 2019-01-07 07:07:48 889005 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:07:48 919620 --> Config Class Initialized
INFO - 2019-01-07 07:07:48 919758 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:07:48 922063 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:07:48 922178 --> Utf8 Class Initialized
INFO - 2019-01-07 07:07:48 923275 --> URI Class Initialized
INFO - 2019-01-07 07:07:48 927076 --> Router Class Initialized
INFO - 2019-01-07 07:07:48 930006 --> Output Class Initialized
INFO - 2019-01-07 07:07:48 931689 --> Security Class Initialized
DEBUG - 2019-01-07 07:07:48 933837 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:07:48 933995 --> Input Class Initialized
INFO - 2019-01-07 07:07:48 935025 --> Language Class Initialized
ERROR - 2019-01-07 07:07:48 938678 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:07:49 254995 --> Config Class Initialized
INFO - 2019-01-07 07:07:49 255134 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:07:49 257070 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:07:49 257183 --> Utf8 Class Initialized
INFO - 2019-01-07 07:07:49 258250 --> URI Class Initialized
INFO - 2019-01-07 07:07:49 260276 --> Router Class Initialized
INFO - 2019-01-07 07:07:49 262285 --> Output Class Initialized
INFO - 2019-01-07 07:07:49 263787 --> Security Class Initialized
DEBUG - 2019-01-07 07:07:49 265479 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:07:49 265593 --> Input Class Initialized
INFO - 2019-01-07 07:07:49 266094 --> Language Class Initialized
INFO - 2019-01-07 07:07:49 271950 --> Loader Class Initialized
INFO - 2019-01-07 07:07:49 273297 --> Helper loaded: url_helper
INFO - 2019-01-07 07:07:49 274007 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:37:49 281826 --> Database Driver Class Initialized
INFO - 2019-01-07 12:37:49 286528 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:37:49 287734 --> Controller Class Initialized
INFO - 2019-01-07 12:37:49 288456 --> Final output sent to browser
DEBUG - 2019-01-07 12:37:49 288584 --> Total execution time: 0.0351
INFO - 2019-01-07 07:07:52 707369 --> Config Class Initialized
INFO - 2019-01-07 07:07:52 707545 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:07:52 709872 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:07:52 710007 --> Utf8 Class Initialized
INFO - 2019-01-07 07:07:52 711488 --> URI Class Initialized
INFO - 2019-01-07 07:07:52 714801 --> Router Class Initialized
INFO - 2019-01-07 07:07:52 717313 --> Output Class Initialized
INFO - 2019-01-07 07:07:52 719294 --> Security Class Initialized
DEBUG - 2019-01-07 07:07:52 721120 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:07:52 721252 --> Input Class Initialized
INFO - 2019-01-07 07:07:52 721883 --> Language Class Initialized
ERROR - 2019-01-07 07:07:52 722893 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-07 07:08:47 859253 --> Config Class Initialized
INFO - 2019-01-07 07:08:47 859555 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:08:47 862165 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:08:47 862265 --> Utf8 Class Initialized
INFO - 2019-01-07 07:08:47 863573 --> URI Class Initialized
DEBUG - 2019-01-07 07:08:47 865633 --> No URI present. Default controller set.
INFO - 2019-01-07 07:08:47 865737 --> Router Class Initialized
INFO - 2019-01-07 07:08:47 869091 --> Output Class Initialized
INFO - 2019-01-07 07:08:47 870811 --> Security Class Initialized
DEBUG - 2019-01-07 07:08:47 872425 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:08:47 872550 --> Input Class Initialized
INFO - 2019-01-07 07:08:47 873038 --> Language Class Initialized
INFO - 2019-01-07 07:08:47 876547 --> Loader Class Initialized
INFO - 2019-01-07 07:08:47 878415 --> Helper loaded: url_helper
INFO - 2019-01-07 07:08:47 879268 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:38:47 890836 --> Database Driver Class Initialized
INFO - 2019-01-07 12:38:47 896305 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:38:47 897209 --> Controller Class Initialized
INFO - 2019-01-07 12:38:47 897666 --> Parser Class Initialized
INFO - 2019-01-07 12:38:47 898318 --> Helper loaded: html_helper
INFO - 2019-01-07 12:38:47 899060 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 12:38:47 900919 --> Model Class Initialized
DEBUG - 2019-01-07 12:38:47 911659 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 12:38:47 917170 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 12:38:47 917666 --> Model Class Initialized
DEBUG - 2019-01-07 12:38:47 918245 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 12:38:47 920284 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 12:38:47 921492 --> Helper loaded: file_helper
DEBUG - 2019-01-07 12:38:47 921602 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 12:38:47 924407 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 926063 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 936378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 938169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 939846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 940103 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 940542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 941441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 943022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 943262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 943684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 945044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 946706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 946947 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 947354 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 948254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 949915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 950164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 950747 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 951709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 953346 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 953618 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 954051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 954787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 956466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 956720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 957145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 958311 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 960232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 960515 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 960990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 961607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 963479 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 963757 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 964235 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 965044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 966928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 967200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 967732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 968350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 970247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 970531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 971030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 971647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 973642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 973918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 974423 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 975050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 977011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 977293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 977832 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 978437 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 980377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 980667 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 981184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 981815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 983802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 984082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 984632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 985270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 987206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 987495 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 988023 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 988656 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 990598 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 990875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 991395 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 992022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 993964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 994245 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 994784 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 995379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 995954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 996525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 997078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 997634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 998184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 998744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 999296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:47 999856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 000405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 000969 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 001530 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 002078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 002671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 003226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 003844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 004458 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 004983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 005503 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 006011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 006527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 007081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 007601 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 008104 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 008665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 009195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 009795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 011859 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 012139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 012706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 013288 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 015259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 015562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 016115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 016705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 018620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 018899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 019454 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 020040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 022047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 022336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 022903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 023489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 025423 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 025717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 026266 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 026922 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 028867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 029153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 029742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 031672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 032378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 034358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 035013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 036959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 037595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 039560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 040180 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 042120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 042742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 044678 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:38:48 045270 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 12:38:48 047234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 048484 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 048772 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 050721 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:38:48 051192 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 12:38:48 059499 --> Final output sent to browser
DEBUG - 2019-01-07 12:38:48 059602 --> Total execution time: 0.1946
INFO - 2019-01-07 07:08:48 130951 --> Config Class Initialized
INFO - 2019-01-07 07:08:48 131167 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:08:48 132858 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:08:48 132941 --> Utf8 Class Initialized
INFO - 2019-01-07 07:08:48 133913 --> URI Class Initialized
DEBUG - 2019-01-07 07:08:48 135512 --> No URI present. Default controller set.
INFO - 2019-01-07 07:08:48 135596 --> Router Class Initialized
INFO - 2019-01-07 07:08:48 137247 --> Output Class Initialized
INFO - 2019-01-07 07:08:48 138560 --> Security Class Initialized
DEBUG - 2019-01-07 07:08:48 139789 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:08:48 139872 --> Input Class Initialized
INFO - 2019-01-07 07:08:48 140274 --> Language Class Initialized
INFO - 2019-01-07 07:08:48 142838 --> Loader Class Initialized
INFO - 2019-01-07 07:08:48 143960 --> Helper loaded: url_helper
INFO - 2019-01-07 07:08:48 144527 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:38:48 151098 --> Database Driver Class Initialized
INFO - 2019-01-07 12:38:48 156913 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:38:48 157922 --> Controller Class Initialized
INFO - 2019-01-07 12:38:48 158406 --> Parser Class Initialized
INFO - 2019-01-07 12:38:48 159183 --> Helper loaded: html_helper
INFO - 2019-01-07 12:38:48 159991 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 12:38:48 162108 --> Model Class Initialized
DEBUG - 2019-01-07 12:38:48 173497 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 12:38:48 177840 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 12:38:48 178280 --> Model Class Initialized
DEBUG - 2019-01-07 12:38:48 178965 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 12:38:48 181860 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 12:38:48 183048 --> Helper loaded: file_helper
DEBUG - 2019-01-07 12:38:48 183154 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 12:38:48 184339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 184566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 186357 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 186785 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 188277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 188507 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 188901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 189728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 191231 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 191463 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 191842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 192522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 194067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 194293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 194705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 195360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 196993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 197233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 197643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 198302 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 199902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 200139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 200550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 201199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 202816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 203064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 203480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 204267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 205862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 206090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 206506 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 207294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 208890 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 209124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 209558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 210300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 211929 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 212160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 212590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 213221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 214829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 215059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 215517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 216142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 217804 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 218041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 218485 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 219460 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 221636 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 221878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 222321 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 223129 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 225136 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 225377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 225853 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 226660 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 228295 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 228547 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 228986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 229792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 231419 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 231667 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 232110 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 232861 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 234500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 234735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 235173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 235953 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 237715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 237983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 238431 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 239298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 240020 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 240705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 241379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 242064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 242743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 243434 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 244127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 244821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 245493 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 246189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 246885 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 247571 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 248244 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 248912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 249640 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 250196 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 250669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 251101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 251538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 251962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 252497 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 252927 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 253350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 253787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 254228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 255002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 256848 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 257087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 257565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 258318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 259979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 260222 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 260734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 261492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 263098 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 263334 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 263811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 264575 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 266212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 266463 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 266953 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 267704 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 269351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 269602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 270067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 270817 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 272447 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 272691 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 273185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 274794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 275599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 277261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 277919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 279541 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 280154 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 281893 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 282484 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 284105 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 284689 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 286307 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:38:48 286864 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 12:38:48 288566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 289612 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 289848 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 291456 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:38:48 291847 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 12:38:48 300050 --> Final output sent to browser
DEBUG - 2019-01-07 12:38:48 300131 --> Total execution time: 0.1632
INFO - 2019-01-07 07:08:48 553256 --> Config Class Initialized
INFO - 2019-01-07 07:08:48 553379 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:08:48 555098 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:08:48 555195 --> Utf8 Class Initialized
INFO - 2019-01-07 07:08:48 556144 --> URI Class Initialized
DEBUG - 2019-01-07 07:08:48 557908 --> No URI present. Default controller set.
INFO - 2019-01-07 07:08:48 558005 --> Router Class Initialized
INFO - 2019-01-07 07:08:48 559819 --> Output Class Initialized
INFO - 2019-01-07 07:08:48 561163 --> Security Class Initialized
DEBUG - 2019-01-07 07:08:48 562494 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:08:48 562589 --> Input Class Initialized
INFO - 2019-01-07 07:08:48 563035 --> Language Class Initialized
INFO - 2019-01-07 07:08:48 566003 --> Loader Class Initialized
INFO - 2019-01-07 07:08:48 567176 --> Helper loaded: url_helper
INFO - 2019-01-07 07:08:48 568012 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:38:48 575089 --> Database Driver Class Initialized
INFO - 2019-01-07 12:38:48 579221 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:38:48 580312 --> Controller Class Initialized
INFO - 2019-01-07 12:38:48 580873 --> Parser Class Initialized
INFO - 2019-01-07 12:38:48 581861 --> Helper loaded: html_helper
INFO - 2019-01-07 12:38:48 582808 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 12:38:48 585064 --> Model Class Initialized
DEBUG - 2019-01-07 12:38:48 596139 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 12:38:48 601404 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 12:38:48 601984 --> Model Class Initialized
DEBUG - 2019-01-07 12:38:48 602874 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 12:38:48 605293 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 12:38:48 606749 --> Helper loaded: file_helper
DEBUG - 2019-01-07 12:38:48 606888 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 12:38:48 609102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 609395 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 613022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 613919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 617007 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 617322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 617866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 619092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 621659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 622077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 622900 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 624011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 626492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 627159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 627752 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 628768 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 630994 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 631331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 631891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 632975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 636008 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 636524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 637444 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 638689 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 641031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 641350 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 642050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 643096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 646065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 646666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 647377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 648406 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 651046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 651482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 652240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 653367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 655781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 656312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 657085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 658154 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 660399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 660732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 661503 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 662565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 665565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 665998 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 666837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 667995 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 672183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 672605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 673495 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 674510 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 676795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 677119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 677750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 678591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 680836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 681159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 681782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 682724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 684952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 685273 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 685892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 686958 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 689230 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 689584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 690188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 691186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 693403 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 693742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 694341 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 695130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 695838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 696520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 697184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 697854 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 698524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 699184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 699846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 700546 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 701194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 702013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 702786 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 703697 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 704420 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 705087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 705797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 706592 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 707189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 707797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 708386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 708986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 709656 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 710238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 710835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 711419 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 712037 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 712939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 715477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 715818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 716480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 717365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 719655 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 719986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 720663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 721550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 723799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 724122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 724775 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 725666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 727932 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 728265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 728924 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 729799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 732038 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 732366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 733016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 733892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 736120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 736454 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 737117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 739327 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 740314 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 742649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 743576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 745779 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 746717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 748991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 749924 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 752161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 753077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 755290 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:38:48 756191 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 12:38:48 758337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 759763 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 760087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:38:48 762311 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:38:48 762862 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 12:38:48 771142 --> Final output sent to browser
DEBUG - 2019-01-07 12:38:48 771249 --> Total execution time: 0.2120
INFO - 2019-01-07 07:08:51 869149 --> Config Class Initialized
INFO - 2019-01-07 07:08:51 869339 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:08:51 870747 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:08:51 870816 --> Utf8 Class Initialized
INFO - 2019-01-07 07:08:51 871694 --> URI Class Initialized
INFO - 2019-01-07 07:08:51 874114 --> Router Class Initialized
INFO - 2019-01-07 07:08:51 875547 --> Output Class Initialized
INFO - 2019-01-07 07:08:51 876586 --> Security Class Initialized
DEBUG - 2019-01-07 07:08:51 877625 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:08:51 877696 --> Input Class Initialized
INFO - 2019-01-07 07:08:51 878037 --> Language Class Initialized
ERROR - 2019-01-07 07:08:51 878611 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 07:08:55 207496 --> Config Class Initialized
INFO - 2019-01-07 07:08:55 208354 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:08:55 212004 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:08:55 212153 --> Utf8 Class Initialized
INFO - 2019-01-07 07:08:55 213706 --> URI Class Initialized
INFO - 2019-01-07 07:08:55 223675 --> Router Class Initialized
INFO - 2019-01-07 07:08:55 227482 --> Output Class Initialized
INFO - 2019-01-07 07:08:55 229871 --> Security Class Initialized
DEBUG - 2019-01-07 07:08:55 231971 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:08:55 232142 --> Input Class Initialized
INFO - 2019-01-07 07:08:55 232695 --> Language Class Initialized
ERROR - 2019-01-07 07:08:55 233737 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 07:08:55 333194 --> Config Class Initialized
INFO - 2019-01-07 07:08:55 333288 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:08:55 335516 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:08:55 335670 --> Utf8 Class Initialized
INFO - 2019-01-07 07:08:55 337503 --> URI Class Initialized
INFO - 2019-01-07 07:08:55 341331 --> Router Class Initialized
INFO - 2019-01-07 07:08:55 344578 --> Output Class Initialized
INFO - 2019-01-07 07:08:55 347121 --> Security Class Initialized
DEBUG - 2019-01-07 07:08:55 349100 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:08:55 349241 --> Input Class Initialized
INFO - 2019-01-07 07:08:55 350016 --> Language Class Initialized
ERROR - 2019-01-07 07:08:55 351521 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:08:55 408549 --> Config Class Initialized
INFO - 2019-01-07 07:08:55 408817 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:08:55 410991 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:08:55 411067 --> Utf8 Class Initialized
INFO - 2019-01-07 07:08:55 412412 --> URI Class Initialized
INFO - 2019-01-07 07:08:55 416985 --> Router Class Initialized
INFO - 2019-01-07 07:08:55 419359 --> Output Class Initialized
INFO - 2019-01-07 07:08:55 421633 --> Security Class Initialized
DEBUG - 2019-01-07 07:08:55 424411 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:08:55 424556 --> Input Class Initialized
INFO - 2019-01-07 07:08:55 425036 --> Language Class Initialized
ERROR - 2019-01-07 07:08:55 425789 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:08:55 708306 --> Config Class Initialized
INFO - 2019-01-07 07:08:55 708419 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:08:55 710369 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:08:55 710491 --> Utf8 Class Initialized
INFO - 2019-01-07 07:08:55 711471 --> URI Class Initialized
INFO - 2019-01-07 07:08:55 714567 --> Router Class Initialized
INFO - 2019-01-07 07:08:55 716587 --> Output Class Initialized
INFO - 2019-01-07 07:08:55 717808 --> Security Class Initialized
DEBUG - 2019-01-07 07:08:55 718861 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:08:55 718935 --> Input Class Initialized
INFO - 2019-01-07 07:08:55 719284 --> Language Class Initialized
ERROR - 2019-01-07 07:08:55 719909 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:08:55 789442 --> Config Class Initialized
INFO - 2019-01-07 07:08:55 789582 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:08:55 792371 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:08:55 792483 --> Utf8 Class Initialized
INFO - 2019-01-07 07:08:55 793838 --> URI Class Initialized
INFO - 2019-01-07 07:08:55 795778 --> Router Class Initialized
INFO - 2019-01-07 07:08:55 797633 --> Output Class Initialized
INFO - 2019-01-07 07:08:55 799253 --> Security Class Initialized
DEBUG - 2019-01-07 07:08:55 801162 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:08:55 801278 --> Input Class Initialized
INFO - 2019-01-07 07:08:55 802041 --> Language Class Initialized
ERROR - 2019-01-07 07:08:55 803541 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:08:55 814657 --> Config Class Initialized
INFO - 2019-01-07 07:08:55 814749 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:08:55 816061 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:08:55 816179 --> Utf8 Class Initialized
INFO - 2019-01-07 07:08:55 817132 --> URI Class Initialized
INFO - 2019-01-07 07:08:55 819248 --> Router Class Initialized
INFO - 2019-01-07 07:08:55 821439 --> Output Class Initialized
INFO - 2019-01-07 07:08:55 823554 --> Security Class Initialized
DEBUG - 2019-01-07 07:08:55 826015 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:08:55 826121 --> Input Class Initialized
INFO - 2019-01-07 07:08:55 826714 --> Language Class Initialized
ERROR - 2019-01-07 07:08:55 827670 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:08:55 902230 --> Config Class Initialized
INFO - 2019-01-07 07:08:55 902364 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:08:55 904591 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:08:55 904669 --> Utf8 Class Initialized
INFO - 2019-01-07 07:08:55 905391 --> URI Class Initialized
INFO - 2019-01-07 07:08:55 908751 --> Router Class Initialized
INFO - 2019-01-07 07:08:55 911727 --> Output Class Initialized
INFO - 2019-01-07 07:08:55 913834 --> Security Class Initialized
DEBUG - 2019-01-07 07:08:55 915833 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:08:55 915936 --> Input Class Initialized
INFO - 2019-01-07 07:08:55 916459 --> Language Class Initialized
ERROR - 2019-01-07 07:08:55 917293 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:08:55 933023 --> Config Class Initialized
INFO - 2019-01-07 07:08:55 933176 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:08:55 935347 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:08:55 935467 --> Utf8 Class Initialized
INFO - 2019-01-07 07:08:55 936759 --> URI Class Initialized
INFO - 2019-01-07 07:08:55 940665 --> Router Class Initialized
INFO - 2019-01-07 07:08:55 943203 --> Output Class Initialized
INFO - 2019-01-07 07:08:55 945327 --> Security Class Initialized
DEBUG - 2019-01-07 07:08:55 947458 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:08:55 947576 --> Input Class Initialized
INFO - 2019-01-07 07:08:55 948148 --> Language Class Initialized
ERROR - 2019-01-07 07:08:55 949103 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:08:56 294104 --> Config Class Initialized
INFO - 2019-01-07 07:08:56 294275 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:08:56 296562 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:08:56 296642 --> Utf8 Class Initialized
INFO - 2019-01-07 07:08:56 297703 --> URI Class Initialized
INFO - 2019-01-07 07:08:56 299606 --> Router Class Initialized
INFO - 2019-01-07 07:08:56 302098 --> Output Class Initialized
INFO - 2019-01-07 07:08:56 304100 --> Security Class Initialized
DEBUG - 2019-01-07 07:08:56 305975 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:08:56 306123 --> Input Class Initialized
INFO - 2019-01-07 07:08:56 306731 --> Language Class Initialized
INFO - 2019-01-07 07:08:56 314214 --> Loader Class Initialized
INFO - 2019-01-07 07:08:56 315454 --> Helper loaded: url_helper
INFO - 2019-01-07 07:08:56 315975 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:38:56 321953 --> Database Driver Class Initialized
INFO - 2019-01-07 12:38:56 329241 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:38:56 330442 --> Controller Class Initialized
INFO - 2019-01-07 12:38:56 331263 --> Final output sent to browser
DEBUG - 2019-01-07 12:38:56 331392 --> Total execution time: 0.0393
INFO - 2019-01-07 07:09:00 789556 --> Config Class Initialized
INFO - 2019-01-07 07:09:00 789901 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:09:00 793303 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:09:00 793457 --> Utf8 Class Initialized
INFO - 2019-01-07 07:09:00 795115 --> URI Class Initialized
INFO - 2019-01-07 07:09:00 801512 --> Router Class Initialized
INFO - 2019-01-07 07:09:00 804768 --> Output Class Initialized
INFO - 2019-01-07 07:09:00 806886 --> Security Class Initialized
DEBUG - 2019-01-07 07:09:00 809242 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:09:00 809381 --> Input Class Initialized
INFO - 2019-01-07 07:09:00 810106 --> Language Class Initialized
ERROR - 2019-01-07 07:09:00 811412 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-07 07:14:45 215553 --> Config Class Initialized
INFO - 2019-01-07 07:14:45 215908 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:14:45 219872 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:14:45 220094 --> Utf8 Class Initialized
INFO - 2019-01-07 07:14:45 221915 --> URI Class Initialized
DEBUG - 2019-01-07 07:14:45 224576 --> No URI present. Default controller set.
INFO - 2019-01-07 07:14:45 224714 --> Router Class Initialized
INFO - 2019-01-07 07:14:45 227478 --> Output Class Initialized
INFO - 2019-01-07 07:14:45 230074 --> Security Class Initialized
DEBUG - 2019-01-07 07:14:45 232141 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:14:45 232280 --> Input Class Initialized
INFO - 2019-01-07 07:14:45 232964 --> Language Class Initialized
INFO - 2019-01-07 07:14:45 237265 --> Loader Class Initialized
INFO - 2019-01-07 07:14:45 239104 --> Helper loaded: url_helper
INFO - 2019-01-07 07:14:45 240060 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:44:45 250824 --> Database Driver Class Initialized
INFO - 2019-01-07 12:44:45 259696 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:44:45 261327 --> Controller Class Initialized
INFO - 2019-01-07 12:44:45 262156 --> Parser Class Initialized
INFO - 2019-01-07 12:44:45 263329 --> Helper loaded: html_helper
INFO - 2019-01-07 12:44:45 264655 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 12:44:45 268029 --> Model Class Initialized
DEBUG - 2019-01-07 12:44:45 286993 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 12:44:45 292787 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 12:44:45 293699 --> Model Class Initialized
DEBUG - 2019-01-07 12:44:45 294707 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 12:44:45 302357 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 12:44:45 305869 --> Helper loaded: file_helper
DEBUG - 2019-01-07 12:44:45 306133 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 12:44:45 311981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 314018 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 324788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 327239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 330203 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 330661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 331378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 332576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 335444 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 335845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 336560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 337680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 340414 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 340818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 341517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 342603 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 345837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 346259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 346983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 348031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 351104 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 351568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 352277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 353343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 356148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 356584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 357290 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 358262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 361099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 361531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 362274 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 363343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 366575 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 367002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 367753 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 368802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 371718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 372134 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 373061 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 374136 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 377150 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 377613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 378401 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 379477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 382911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 383341 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 384130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 385154 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 388099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 388546 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 389336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 390378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 393701 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 394135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 395029 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 396524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 406847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 407293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 408108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 409281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 412342 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 412785 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 413598 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 416686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 419713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 420139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 420957 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 423574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 429003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 429552 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 430461 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 431597 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 432559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 433581 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 434685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 435673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 436659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 437623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 438581 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 439543 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 441907 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 442842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 443815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 444771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 445703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 446646 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 447619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 448803 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 449726 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 450587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 451414 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 452254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 453185 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 454034 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 454876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 455724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 456593 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 458444 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 461082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 461424 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 462086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 464647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 467869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 468215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 468897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 469728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 472032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 472364 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 473145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 473949 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 476336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 476705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 477365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 478156 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 480511 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 481583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 484179 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 485192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 487926 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 488272 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 490839 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 498683 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 499703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 762140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 764200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 777003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 778384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 781579 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 782354 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 784621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 785335 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 787614 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:44:45 788574 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 12:44:45 791121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 792721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 793090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:44:45 795603 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:44:45 796164 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 12:44:45 804281 --> Final output sent to browser
DEBUG - 2019-01-07 12:44:45 804387 --> Total execution time: 0.5856
INFO - 2019-01-07 07:14:47 024266 --> Config Class Initialized
INFO - 2019-01-07 07:14:47 024527 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:14:47 026878 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:14:47 026978 --> Utf8 Class Initialized
INFO - 2019-01-07 07:14:47 028310 --> URI Class Initialized
INFO - 2019-01-07 07:14:47 033828 --> Router Class Initialized
INFO - 2019-01-07 07:14:47 038350 --> Output Class Initialized
INFO - 2019-01-07 07:14:47 041091 --> Security Class Initialized
DEBUG - 2019-01-07 07:14:47 044255 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:14:47 044397 --> Input Class Initialized
INFO - 2019-01-07 07:14:47 045330 --> Language Class Initialized
INFO - 2019-01-07 07:14:47 058293 --> Loader Class Initialized
INFO - 2019-01-07 07:14:47 060976 --> Helper loaded: url_helper
INFO - 2019-01-07 07:14:47 062076 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:44:47 078115 --> Database Driver Class Initialized
INFO - 2019-01-07 12:44:47 089875 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:44:47 091876 --> Controller Class Initialized
INFO - 2019-01-07 12:44:47 093034 --> Final output sent to browser
DEBUG - 2019-01-07 12:44:47 093174 --> Total execution time: 0.0716
INFO - 2019-01-07 07:14:47 767489 --> Config Class Initialized
INFO - 2019-01-07 07:14:47 767709 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:14:47 769237 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:14:47 769310 --> Utf8 Class Initialized
INFO - 2019-01-07 07:14:47 770296 --> URI Class Initialized
INFO - 2019-01-07 07:14:47 772990 --> Router Class Initialized
INFO - 2019-01-07 07:14:47 774512 --> Output Class Initialized
INFO - 2019-01-07 07:14:47 776225 --> Security Class Initialized
DEBUG - 2019-01-07 07:14:47 777252 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:14:47 777326 --> Input Class Initialized
INFO - 2019-01-07 07:14:47 777690 --> Language Class Initialized
ERROR - 2019-01-07 07:14:47 778439 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:14:47 805778 --> Config Class Initialized
INFO - 2019-01-07 07:14:47 805985 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:14:47 807459 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:14:47 807537 --> Utf8 Class Initialized
INFO - 2019-01-07 07:14:47 808388 --> URI Class Initialized
INFO - 2019-01-07 07:14:47 811117 --> Router Class Initialized
INFO - 2019-01-07 07:14:47 812597 --> Output Class Initialized
INFO - 2019-01-07 07:14:47 813710 --> Security Class Initialized
DEBUG - 2019-01-07 07:14:47 814754 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:14:47 814826 --> Input Class Initialized
INFO - 2019-01-07 07:14:47 815170 --> Language Class Initialized
ERROR - 2019-01-07 07:14:47 815874 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:14:48 011379 --> Config Class Initialized
INFO - 2019-01-07 07:14:48 011486 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:14:48 013005 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:14:48 013081 --> Utf8 Class Initialized
INFO - 2019-01-07 07:14:48 014031 --> URI Class Initialized
INFO - 2019-01-07 07:14:48 021771 --> Router Class Initialized
INFO - 2019-01-07 07:14:48 023190 --> Output Class Initialized
INFO - 2019-01-07 07:14:48 024524 --> Security Class Initialized
DEBUG - 2019-01-07 07:14:48 025762 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:14:48 025832 --> Input Class Initialized
INFO - 2019-01-07 07:14:48 026186 --> Language Class Initialized
ERROR - 2019-01-07 07:14:48 026760 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:14:48 028666 --> Config Class Initialized
INFO - 2019-01-07 07:14:48 028750 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:14:48 030093 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:14:48 030164 --> Utf8 Class Initialized
INFO - 2019-01-07 07:14:48 030924 --> URI Class Initialized
INFO - 2019-01-07 07:14:48 033411 --> Router Class Initialized
INFO - 2019-01-07 07:14:48 035042 --> Output Class Initialized
INFO - 2019-01-07 07:14:48 036242 --> Security Class Initialized
DEBUG - 2019-01-07 07:14:48 037247 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:14:48 037318 --> Input Class Initialized
INFO - 2019-01-07 07:14:48 037676 --> Language Class Initialized
ERROR - 2019-01-07 07:14:48 038242 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:14:48 062757 --> Config Class Initialized
INFO - 2019-01-07 07:14:48 062923 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:14:48 065126 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:14:48 065227 --> Utf8 Class Initialized
INFO - 2019-01-07 07:14:48 066484 --> URI Class Initialized
INFO - 2019-01-07 07:14:48 070199 --> Router Class Initialized
INFO - 2019-01-07 07:14:48 073165 --> Output Class Initialized
INFO - 2019-01-07 07:14:48 075181 --> Security Class Initialized
DEBUG - 2019-01-07 07:14:48 076755 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:14:48 076831 --> Input Class Initialized
INFO - 2019-01-07 07:14:48 077173 --> Language Class Initialized
ERROR - 2019-01-07 07:14:48 077733 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:14:48 125407 --> Config Class Initialized
INFO - 2019-01-07 07:14:48 125565 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:14:48 127650 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:14:48 127770 --> Utf8 Class Initialized
INFO - 2019-01-07 07:14:48 128964 --> URI Class Initialized
INFO - 2019-01-07 07:14:48 133135 --> Router Class Initialized
INFO - 2019-01-07 07:14:48 135502 --> Output Class Initialized
INFO - 2019-01-07 07:14:48 137187 --> Security Class Initialized
DEBUG - 2019-01-07 07:14:48 138952 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:14:48 139066 --> Input Class Initialized
INFO - 2019-01-07 07:14:48 139642 --> Language Class Initialized
ERROR - 2019-01-07 07:14:48 140549 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:14:48 148874 --> Config Class Initialized
INFO - 2019-01-07 07:14:48 149003 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:14:48 151026 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:14:48 151143 --> Utf8 Class Initialized
INFO - 2019-01-07 07:14:48 152285 --> URI Class Initialized
INFO - 2019-01-07 07:14:48 155185 --> Router Class Initialized
INFO - 2019-01-07 07:14:48 157387 --> Output Class Initialized
INFO - 2019-01-07 07:14:48 159038 --> Security Class Initialized
DEBUG - 2019-01-07 07:14:48 160631 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:14:48 160748 --> Input Class Initialized
INFO - 2019-01-07 07:14:48 161273 --> Language Class Initialized
ERROR - 2019-01-07 07:14:48 162148 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:17:05 845516 --> Config Class Initialized
INFO - 2019-01-07 07:17:05 845782 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:17:05 848015 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:17:05 848114 --> Utf8 Class Initialized
INFO - 2019-01-07 07:17:05 853049 --> URI Class Initialized
INFO - 2019-01-07 07:17:05 859805 --> Router Class Initialized
INFO - 2019-01-07 07:17:05 870188 --> Config Class Initialized
INFO - 2019-01-07 07:17:05 870513 --> Hooks Class Initialized
INFO - 2019-01-07 07:17:05 872612 --> Output Class Initialized
INFO - 2019-01-07 07:17:05 874591 --> Security Class Initialized
DEBUG - 2019-01-07 07:17:05 876501 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:17:05 876626 --> Input Class Initialized
INFO - 2019-01-07 07:17:05 877229 --> Language Class Initialized
ERROR - 2019-01-07 07:17:05 878323 --> 404 Page Not Found: Assets/js
DEBUG - 2019-01-07 07:17:05 880661 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:17:05 880754 --> Utf8 Class Initialized
INFO - 2019-01-07 07:17:05 881787 --> URI Class Initialized
INFO - 2019-01-07 07:17:05 884677 --> Router Class Initialized
INFO - 2019-01-07 07:17:05 886363 --> Output Class Initialized
INFO - 2019-01-07 07:17:05 887617 --> Security Class Initialized
DEBUG - 2019-01-07 07:17:05 888838 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:17:05 888921 --> Input Class Initialized
INFO - 2019-01-07 07:17:05 889329 --> Language Class Initialized
ERROR - 2019-01-07 07:17:05 890623 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 07:28:06 606234 --> Config Class Initialized
INFO - 2019-01-07 07:28:06 653233 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:28:06 764023 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:28:06 764185 --> Utf8 Class Initialized
INFO - 2019-01-07 07:28:06 766110 --> URI Class Initialized
DEBUG - 2019-01-07 07:28:06 845407 --> No URI present. Default controller set.
INFO - 2019-01-07 07:28:06 845557 --> Router Class Initialized
INFO - 2019-01-07 07:28:06 855393 --> Output Class Initialized
INFO - 2019-01-07 07:28:06 871256 --> Security Class Initialized
DEBUG - 2019-01-07 07:28:06 896116 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:28:06 896243 --> Input Class Initialized
INFO - 2019-01-07 07:28:06 906295 --> Language Class Initialized
INFO - 2019-01-07 07:28:06 932847 --> Loader Class Initialized
INFO - 2019-01-07 07:28:06 941615 --> Helper loaded: url_helper
INFO - 2019-01-07 07:28:06 953257 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:58:06 998290 --> Database Driver Class Initialized
INFO - 2019-01-07 12:58:07 064538 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:58:07 077615 --> Controller Class Initialized
INFO - 2019-01-07 12:58:07 120098 --> Parser Class Initialized
INFO - 2019-01-07 12:58:07 121359 --> Helper loaded: html_helper
INFO - 2019-01-07 12:58:07 143033 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 12:58:07 185762 --> Model Class Initialized
DEBUG - 2019-01-07 12:58:07 198004 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 12:58:07 201559 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 12:58:07 209553 --> Model Class Initialized
DEBUG - 2019-01-07 12:58:07 210546 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 12:58:07 251260 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 12:58:07 263252 --> Helper loaded: file_helper
DEBUG - 2019-01-07 12:58:07 263427 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 12:58:07 276176 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 286559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 318217 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 344733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 347966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 348231 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 348676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 349502 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 352293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 352698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 353562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 354202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 355829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 356061 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 356473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 357032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 358665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 358911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 359920 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 361016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 365946 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 366458 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 367620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 371031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 374502 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 375071 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 376137 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 377151 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 380702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 381222 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 382148 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 383141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 385046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 385447 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 386217 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 387948 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 391977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 392503 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 393353 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 394778 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 398682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 399173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 400046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 401298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 404911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 405389 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 406282 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 407603 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 411499 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 412019 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 412972 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 414347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 418138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 418643 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 419542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 420938 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 424591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 425080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 425991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 427344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 430991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 431510 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 432406 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 433820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 437623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 438139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 439064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 440416 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 444197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 444715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 445625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 446875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 447901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 448839 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 449805 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 450896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 452007 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 453079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 454164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 455298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 456451 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 458149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 459132 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 460110 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 461071 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 462307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 463387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 465527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 467004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 468648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 470083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 471518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 473129 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 474598 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 475771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 477236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 478724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 479953 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 486098 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 486906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 488559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 489892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 496254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 497102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 498713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 500032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 505987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 507114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 508775 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 510036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 518492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 519443 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 521164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 522511 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 528969 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 529815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 531563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 532875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 539067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 539885 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 541518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 547714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 549109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 555583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 556934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 562922 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 564234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 570158 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 571422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 577109 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 578043 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 582672 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:58:07 583925 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 12:58:07 588290 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 591097 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 591603 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:07 596297 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:58:07 597568 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 12:58:07 614418 --> Final output sent to browser
DEBUG - 2019-01-07 12:58:07 614608 --> Total execution time: 1.1514
INFO - 2019-01-07 07:28:07 823952 --> Config Class Initialized
INFO - 2019-01-07 07:28:07 824048 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:28:07 825342 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:28:07 825424 --> Utf8 Class Initialized
INFO - 2019-01-07 07:28:07 826152 --> URI Class Initialized
INFO - 2019-01-07 07:28:07 828440 --> Router Class Initialized
INFO - 2019-01-07 07:28:07 829797 --> Output Class Initialized
INFO - 2019-01-07 07:28:07 836093 --> Config Class Initialized
INFO - 2019-01-07 07:28:07 836272 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:28:07 837730 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:28:07 837805 --> Utf8 Class Initialized
INFO - 2019-01-07 07:28:07 838680 --> URI Class Initialized
INFO - 2019-01-07 07:28:07 840842 --> Security Class Initialized
DEBUG - 2019-01-07 07:28:07 841846 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:28:07 841919 --> Input Class Initialized
INFO - 2019-01-07 07:28:07 842258 --> Language Class Initialized
INFO - 2019-01-07 07:28:07 843269 --> Router Class Initialized
INFO - 2019-01-07 07:28:07 844742 --> Output Class Initialized
INFO - 2019-01-07 07:28:07 845830 --> Security Class Initialized
DEBUG - 2019-01-07 07:28:07 846870 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:28:07 846945 --> Input Class Initialized
INFO - 2019-01-07 07:28:07 847292 --> Language Class Initialized
ERROR - 2019-01-07 07:28:07 847887 --> 404 Page Not Found: Uploads/gauravgmail.com
ERROR - 2019-01-07 07:28:07 848392 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:28:07 998332 --> Config Class Initialized
INFO - 2019-01-07 07:28:07 998456 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:28:08 000319 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:28:08 000410 --> Utf8 Class Initialized
INFO - 2019-01-07 07:28:08 001291 --> URI Class Initialized
INFO - 2019-01-07 07:28:08 003325 --> Router Class Initialized
INFO - 2019-01-07 07:28:08 018388 --> Config Class Initialized
INFO - 2019-01-07 07:28:08 022773 --> Config Class Initialized
INFO - 2019-01-07 07:28:08 022912 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:28:08 026042 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:28:08 026185 --> Utf8 Class Initialized
INFO - 2019-01-07 07:28:08 027755 --> URI Class Initialized
INFO - 2019-01-07 07:28:08 031228 --> Output Class Initialized
INFO - 2019-01-07 07:28:08 036007 --> Security Class Initialized
INFO - 2019-01-07 07:28:08 036807 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:28:08 040077 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:28:08 040185 --> Utf8 Class Initialized
INFO - 2019-01-07 07:28:08 041666 --> URI Class Initialized
INFO - 2019-01-07 07:28:08 043729 --> Router Class Initialized
INFO - 2019-01-07 07:28:08 046885 --> Output Class Initialized
INFO - 2019-01-07 07:28:08 047970 --> Security Class Initialized
DEBUG - 2019-01-07 07:28:08 049426 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:28:08 049511 --> Input Class Initialized
INFO - 2019-01-07 07:28:08 049949 --> Language Class Initialized
ERROR - 2019-01-07 07:28:08 050522 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:28:08 053988 --> Router Class Initialized
DEBUG - 2019-01-07 07:28:08 062294 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:28:08 062393 --> Input Class Initialized
INFO - 2019-01-07 07:28:08 062846 --> Language Class Initialized
ERROR - 2019-01-07 07:28:08 063560 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:28:08 074661 --> Config Class Initialized
INFO - 2019-01-07 07:28:08 074889 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:28:08 076662 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:28:08 076749 --> Utf8 Class Initialized
INFO - 2019-01-07 07:28:08 077835 --> URI Class Initialized
INFO - 2019-01-07 07:28:08 080975 --> Output Class Initialized
INFO - 2019-01-07 07:28:08 082326 --> Security Class Initialized
DEBUG - 2019-01-07 07:28:08 083628 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:28:08 083715 --> Input Class Initialized
INFO - 2019-01-07 07:28:08 084140 --> Language Class Initialized
ERROR - 2019-01-07 07:28:08 084860 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:28:08 095297 --> Config Class Initialized
INFO - 2019-01-07 07:28:08 095530 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:28:08 103343 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:28:08 103447 --> Utf8 Class Initialized
INFO - 2019-01-07 07:28:08 104515 --> URI Class Initialized
INFO - 2019-01-07 07:28:08 106432 --> Router Class Initialized
INFO - 2019-01-07 07:28:08 108217 --> Output Class Initialized
INFO - 2019-01-07 07:28:08 112122 --> Config Class Initialized
INFO - 2019-01-07 07:28:08 112333 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:28:08 114058 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:28:08 114197 --> Utf8 Class Initialized
INFO - 2019-01-07 07:28:08 115320 --> URI Class Initialized
INFO - 2019-01-07 07:28:08 116950 --> Router Class Initialized
INFO - 2019-01-07 07:28:08 118786 --> Output Class Initialized
INFO - 2019-01-07 07:28:08 120078 --> Security Class Initialized
DEBUG - 2019-01-07 07:28:08 121350 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:28:08 121459 --> Input Class Initialized
INFO - 2019-01-07 07:28:08 121885 --> Language Class Initialized
ERROR - 2019-01-07 07:28:08 122605 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:28:08 123537 --> Security Class Initialized
DEBUG - 2019-01-07 07:28:08 124830 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:28:08 124914 --> Input Class Initialized
INFO - 2019-01-07 07:28:08 125334 --> Language Class Initialized
INFO - 2019-01-07 07:28:08 127645 --> Router Class Initialized
INFO - 2019-01-07 07:28:08 129396 --> Output Class Initialized
INFO - 2019-01-07 07:28:08 130686 --> Security Class Initialized
DEBUG - 2019-01-07 07:28:08 137332 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:28:08 137428 --> Input Class Initialized
INFO - 2019-01-07 07:28:08 137859 --> Language Class Initialized
ERROR - 2019-01-07 07:28:08 138562 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:28:08 140110 --> Loader Class Initialized
INFO - 2019-01-07 07:28:08 141258 --> Helper loaded: url_helper
INFO - 2019-01-07 07:28:08 141881 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:58:08 148999 --> Database Driver Class Initialized
INFO - 2019-01-07 12:58:08 153619 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:58:08 154681 --> Controller Class Initialized
INFO - 2019-01-07 12:58:08 155303 --> Final output sent to browser
DEBUG - 2019-01-07 12:58:08 155371 --> Total execution time: 0.0616
INFO - 2019-01-07 07:28:08 601651 --> Config Class Initialized
INFO - 2019-01-07 07:28:08 601876 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:28:08 605755 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:28:08 605946 --> Utf8 Class Initialized
INFO - 2019-01-07 07:28:08 608094 --> URI Class Initialized
INFO - 2019-01-07 07:28:08 614058 --> Router Class Initialized
INFO - 2019-01-07 07:28:08 618257 --> Output Class Initialized
INFO - 2019-01-07 07:28:08 621298 --> Security Class Initialized
DEBUG - 2019-01-07 07:28:08 624336 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:28:08 624540 --> Input Class Initialized
INFO - 2019-01-07 07:28:08 625541 --> Language Class Initialized
ERROR - 2019-01-07 07:28:08 627103 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-07 07:28:20 580490 --> Config Class Initialized
INFO - 2019-01-07 07:28:20 580856 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:28:20 583849 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:28:20 583988 --> Utf8 Class Initialized
INFO - 2019-01-07 07:28:20 585604 --> URI Class Initialized
DEBUG - 2019-01-07 07:28:20 588186 --> No URI present. Default controller set.
INFO - 2019-01-07 07:28:20 588323 --> Router Class Initialized
INFO - 2019-01-07 07:28:20 591166 --> Output Class Initialized
INFO - 2019-01-07 07:28:20 593180 --> Security Class Initialized
DEBUG - 2019-01-07 07:28:20 595217 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:28:20 595352 --> Input Class Initialized
INFO - 2019-01-07 07:28:20 596029 --> Language Class Initialized
INFO - 2019-01-07 07:28:20 600112 --> Loader Class Initialized
INFO - 2019-01-07 07:28:20 601927 --> Helper loaded: url_helper
INFO - 2019-01-07 07:28:20 602946 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:58:20 613648 --> Database Driver Class Initialized
INFO - 2019-01-07 12:58:20 621984 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:58:20 623590 --> Controller Class Initialized
INFO - 2019-01-07 12:58:20 624456 --> Parser Class Initialized
INFO - 2019-01-07 12:58:20 625725 --> Helper loaded: html_helper
INFO - 2019-01-07 12:58:20 627043 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 12:58:20 630569 --> Model Class Initialized
DEBUG - 2019-01-07 12:58:20 640360 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 12:58:20 644670 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 12:58:20 645523 --> Model Class Initialized
DEBUG - 2019-01-07 12:58:20 646135 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 12:58:20 649808 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 12:58:20 651926 --> Helper loaded: file_helper
DEBUG - 2019-01-07 12:58:20 652120 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 12:58:20 656342 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 657943 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 667459 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 669459 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 672506 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 672977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 673799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 674626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 677510 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 677939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 678688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 679438 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 682358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 682802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 683549 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 684307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 687299 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 687773 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 688545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 689299 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 692255 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 692760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 693543 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 694292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 697308 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 697772 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 698555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 699297 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 702357 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 702864 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 703661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 704466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 707617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 708072 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 708911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 710050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 713267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 713737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 714560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 715560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 719811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 720268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 721110 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 722060 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 725289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 725764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 726628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 727565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 730719 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 731168 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 732044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 732948 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 736162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 736646 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 737509 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 738430 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 741624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 742075 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 742945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 743880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 747059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 747534 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 748385 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 749222 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 752393 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 752859 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 753735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 754587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 757771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 758224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 759100 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 760031 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 760889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 761857 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 762873 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 764069 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 764852 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 765629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 766380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 767127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 767857 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 768625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 769354 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 770134 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 770855 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 771586 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 772319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 773412 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 774276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 775139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 776051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 776921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 777863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 778714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 779561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 780383 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 781330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 782121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 785640 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 786099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 787082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 787858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 791107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 791606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 792536 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 793308 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 796500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 796992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 797976 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 798760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 802053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 802582 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 803524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 804301 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 807703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 808170 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 809107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 809897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 813112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 813606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 814557 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 817738 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 818660 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 821945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 822911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 826126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 827353 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 830657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 831615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 834816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 835771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 838968 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:58:20 839847 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 12:58:20 842968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 844980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 845449 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:58:20 848625 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:58:20 849402 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 12:58:20 858184 --> Final output sent to browser
DEBUG - 2019-01-07 12:58:20 858324 --> Total execution time: 0.2728
INFO - 2019-01-07 07:28:21 071130 --> Config Class Initialized
INFO - 2019-01-07 07:28:21 071331 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:28:21 072844 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:28:21 072921 --> Utf8 Class Initialized
INFO - 2019-01-07 07:28:21 073901 --> URI Class Initialized
INFO - 2019-01-07 07:28:21 077334 --> Router Class Initialized
INFO - 2019-01-07 07:28:21 080914 --> Output Class Initialized
INFO - 2019-01-07 07:28:21 083142 --> Security Class Initialized
DEBUG - 2019-01-07 07:28:21 084796 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:28:21 084940 --> Input Class Initialized
INFO - 2019-01-07 07:28:21 085571 --> Language Class Initialized
ERROR - 2019-01-07 07:28:21 086427 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:28:21 212769 --> Config Class Initialized
INFO - 2019-01-07 07:28:21 213118 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:28:21 215832 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:28:21 215970 --> Utf8 Class Initialized
INFO - 2019-01-07 07:28:21 217689 --> URI Class Initialized
INFO - 2019-01-07 07:28:21 222594 --> Router Class Initialized
INFO - 2019-01-07 07:28:21 225369 --> Output Class Initialized
INFO - 2019-01-07 07:28:21 227440 --> Security Class Initialized
DEBUG - 2019-01-07 07:28:21 229475 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:28:21 229640 --> Input Class Initialized
INFO - 2019-01-07 07:28:21 230307 --> Language Class Initialized
ERROR - 2019-01-07 07:28:21 244725 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:28:21 253539 --> Config Class Initialized
INFO - 2019-01-07 07:28:21 253690 --> Hooks Class Initialized
INFO - 2019-01-07 07:28:21 268702 --> Config Class Initialized
INFO - 2019-01-07 07:28:21 269036 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:28:21 271821 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:28:21 271958 --> Utf8 Class Initialized
INFO - 2019-01-07 07:28:21 273683 --> URI Class Initialized
INFO - 2019-01-07 07:28:21 276520 --> Config Class Initialized
INFO - 2019-01-07 07:28:21 276835 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:28:21 279630 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:28:21 279767 --> Utf8 Class Initialized
INFO - 2019-01-07 07:28:21 281450 --> URI Class Initialized
DEBUG - 2019-01-07 07:28:21 284282 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:28:21 284430 --> Utf8 Class Initialized
INFO - 2019-01-07 07:28:21 285871 --> URI Class Initialized
INFO - 2019-01-07 07:28:21 293194 --> Router Class Initialized
INFO - 2019-01-07 07:28:21 303515 --> Router Class Initialized
INFO - 2019-01-07 07:28:21 306593 --> Output Class Initialized
INFO - 2019-01-07 07:28:21 308522 --> Security Class Initialized
INFO - 2019-01-07 07:28:21 310842 --> Router Class Initialized
INFO - 2019-01-07 07:28:21 313687 --> Output Class Initialized
INFO - 2019-01-07 07:28:21 315746 --> Security Class Initialized
INFO - 2019-01-07 07:28:21 318212 --> Output Class Initialized
INFO - 2019-01-07 07:28:21 321424 --> Security Class Initialized
DEBUG - 2019-01-07 07:28:21 323460 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:28:21 323542 --> Input Class Initialized
INFO - 2019-01-07 07:28:21 323899 --> Language Class Initialized
ERROR - 2019-01-07 07:28:21 324515 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-07 07:28:21 326512 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:28:21 326591 --> Input Class Initialized
INFO - 2019-01-07 07:28:21 326950 --> Language Class Initialized
ERROR - 2019-01-07 07:28:21 327557 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-07 07:28:21 329658 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:28:21 329735 --> Input Class Initialized
INFO - 2019-01-07 07:28:21 330298 --> Language Class Initialized
ERROR - 2019-01-07 07:28:21 331238 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:28:21 337059 --> Config Class Initialized
INFO - 2019-01-07 07:28:21 337143 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:28:21 338865 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:28:21 338969 --> Utf8 Class Initialized
INFO - 2019-01-07 07:28:21 340205 --> URI Class Initialized
INFO - 2019-01-07 07:28:21 342602 --> Router Class Initialized
INFO - 2019-01-07 07:28:21 344036 --> Output Class Initialized
INFO - 2019-01-07 07:28:21 349179 --> Security Class Initialized
DEBUG - 2019-01-07 07:28:21 350414 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:28:21 350516 --> Input Class Initialized
INFO - 2019-01-07 07:28:21 350967 --> Language Class Initialized
ERROR - 2019-01-07 07:28:21 351566 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:28:21 357633 --> Config Class Initialized
INFO - 2019-01-07 07:28:21 357816 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:28:21 359977 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:28:21 360078 --> Utf8 Class Initialized
INFO - 2019-01-07 07:28:21 361511 --> URI Class Initialized
INFO - 2019-01-07 07:28:21 363965 --> Router Class Initialized
INFO - 2019-01-07 07:28:21 365416 --> Output Class Initialized
INFO - 2019-01-07 07:28:21 366801 --> Security Class Initialized
DEBUG - 2019-01-07 07:28:21 368192 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:28:21 368268 --> Input Class Initialized
INFO - 2019-01-07 07:28:21 368647 --> Language Class Initialized
INFO - 2019-01-07 07:28:21 374268 --> Loader Class Initialized
INFO - 2019-01-07 07:28:21 375375 --> Helper loaded: url_helper
INFO - 2019-01-07 07:28:21 376305 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:58:21 385648 --> Database Driver Class Initialized
INFO - 2019-01-07 12:58:21 392245 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:58:21 393176 --> Controller Class Initialized
INFO - 2019-01-07 12:58:21 393783 --> Final output sent to browser
DEBUG - 2019-01-07 12:58:21 393853 --> Total execution time: 0.0374
INFO - 2019-01-07 07:28:21 413075 --> Config Class Initialized
INFO - 2019-01-07 07:28:21 413233 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:28:21 415616 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:28:21 415750 --> Utf8 Class Initialized
INFO - 2019-01-07 07:28:21 417068 --> URI Class Initialized
INFO - 2019-01-07 07:28:21 421266 --> Router Class Initialized
INFO - 2019-01-07 07:28:21 423795 --> Output Class Initialized
INFO - 2019-01-07 07:28:21 425648 --> Security Class Initialized
DEBUG - 2019-01-07 07:28:21 427489 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:28:21 427639 --> Input Class Initialized
INFO - 2019-01-07 07:28:21 428255 --> Language Class Initialized
ERROR - 2019-01-07 07:28:21 429282 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:28:26 799093 --> Config Class Initialized
INFO - 2019-01-07 07:28:26 799323 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:28:26 801326 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:28:26 801423 --> Utf8 Class Initialized
INFO - 2019-01-07 07:28:26 803065 --> URI Class Initialized
INFO - 2019-01-07 07:28:26 808104 --> Router Class Initialized
INFO - 2019-01-07 07:28:26 809923 --> Output Class Initialized
INFO - 2019-01-07 07:28:26 812108 --> Security Class Initialized
DEBUG - 2019-01-07 07:28:26 814167 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:28:26 814258 --> Input Class Initialized
INFO - 2019-01-07 07:28:26 814815 --> Language Class Initialized
ERROR - 2019-01-07 07:28:26 815534 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 07:28:26 920995 --> Config Class Initialized
INFO - 2019-01-07 07:28:26 921159 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:28:26 923784 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:28:26 923927 --> Utf8 Class Initialized
INFO - 2019-01-07 07:28:26 925498 --> URI Class Initialized
INFO - 2019-01-07 07:28:26 929709 --> Router Class Initialized
INFO - 2019-01-07 07:28:26 932882 --> Output Class Initialized
INFO - 2019-01-07 07:28:26 935694 --> Security Class Initialized
DEBUG - 2019-01-07 07:28:26 939014 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:28:26 939177 --> Input Class Initialized
INFO - 2019-01-07 07:28:26 940224 --> Language Class Initialized
ERROR - 2019-01-07 07:28:26 941559 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 07:29:10 969095 --> Config Class Initialized
INFO - 2019-01-07 07:29:10 969455 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:29:10 971906 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:29:10 972037 --> Utf8 Class Initialized
INFO - 2019-01-07 07:29:10 973546 --> URI Class Initialized
DEBUG - 2019-01-07 07:29:10 976074 --> No URI present. Default controller set.
INFO - 2019-01-07 07:29:10 976205 --> Router Class Initialized
INFO - 2019-01-07 07:29:10 978884 --> Output Class Initialized
INFO - 2019-01-07 07:29:10 980870 --> Security Class Initialized
DEBUG - 2019-01-07 07:29:10 982908 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:29:10 983038 --> Input Class Initialized
INFO - 2019-01-07 07:29:10 983668 --> Language Class Initialized
INFO - 2019-01-07 07:29:10 990318 --> Loader Class Initialized
INFO - 2019-01-07 07:29:10 995086 --> Helper loaded: url_helper
INFO - 2019-01-07 07:29:10 996156 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:59:11 006630 --> Database Driver Class Initialized
INFO - 2019-01-07 07:29:11 184792 --> Config Class Initialized
INFO - 2019-01-07 07:29:11 185110 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:29:11 187567 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:29:11 187709 --> Utf8 Class Initialized
INFO - 2019-01-07 07:29:11 189193 --> URI Class Initialized
DEBUG - 2019-01-07 07:29:11 191694 --> No URI present. Default controller set.
INFO - 2019-01-07 07:29:11 191823 --> Router Class Initialized
INFO - 2019-01-07 07:29:11 194482 --> Output Class Initialized
INFO - 2019-01-07 07:29:11 196608 --> Security Class Initialized
DEBUG - 2019-01-07 07:29:11 198569 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:29:11 198697 --> Input Class Initialized
INFO - 2019-01-07 07:29:11 199340 --> Language Class Initialized
INFO - 2019-01-07 07:29:11 203244 --> Loader Class Initialized
INFO - 2019-01-07 07:29:11 205346 --> Helper loaded: url_helper
INFO - 2019-01-07 07:29:11 206619 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:59:11 217788 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:59:11 219274 --> Controller Class Initialized
INFO - 2019-01-07 12:59:11 220010 --> Parser Class Initialized
INFO - 2019-01-07 12:59:11 221071 --> Helper loaded: html_helper
INFO - 2019-01-07 12:59:11 222230 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 12:59:11 228744 --> Database Driver Class Initialized
INFO - 2019-01-07 12:59:11 230211 --> Model Class Initialized
DEBUG - 2019-01-07 12:59:11 411763 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 12:59:11 504676 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 12:59:11 505394 --> Model Class Initialized
DEBUG - 2019-01-07 12:59:11 506047 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 12:59:11 508855 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 12:59:11 510648 --> Helper loaded: file_helper
DEBUG - 2019-01-07 12:59:11 510799 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 12:59:11 514770 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 516390 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 527426 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 529442 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 531969 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 532335 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 532967 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 603080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 605143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 605370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 605782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 606568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 608052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 608263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 608663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 609446 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 613037 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 613270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 613672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 617050 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 620014 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 620413 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 621054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 621964 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 624490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 624851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 625498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 626353 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 628906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 629265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 629923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 630795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 633374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 633764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 634416 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 635278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 637881 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 638247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 638926 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 639796 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 642415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 642806 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 643498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 644361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 647077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 647463 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 648152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 649023 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 651685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 652055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 652784 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 653637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 656279 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 656668 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 657366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 658240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 660914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 661284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 662005 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 662897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 665561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 665934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 666659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 667558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 670222 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 670615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 671323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 672251 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 674928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 675303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 676039 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 676915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 677746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 678574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 679379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 680206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 681020 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 681838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 682660 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 683473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 684271 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 685082 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 685897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 686703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 687515 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 688308 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 689130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 690114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 690840 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 691551 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 692243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 692954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 693732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 694420 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 695106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 695806 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 696538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 697376 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 700326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 700716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 701483 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 702315 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 705960 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 706645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 707948 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 709269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 713227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 714056 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 715039 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 716229 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 719456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 719909 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 720830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 803132 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 806533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 806915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 807945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 809026 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 812257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 812684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 813446 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 815992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 817253 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 819880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 821224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 823817 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 824959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 827517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 828362 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 831176 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 832010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 834809 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:59:11 835675 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 12:59:11 838376 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 839992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 840346 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:11 843008 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:59:11 843650 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 12:59:11 851906 --> Final output sent to browser
DEBUG - 2019-01-07 12:59:11 852025 --> Total execution time: 0.8777
INFO - 2019-01-07 12:59:11 852425 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:59:11 853734 --> Controller Class Initialized
INFO - 2019-01-07 12:59:11 854343 --> Parser Class Initialized
INFO - 2019-01-07 12:59:11 855274 --> Helper loaded: html_helper
INFO - 2019-01-07 12:59:11 857284 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 12:59:11 863567 --> Model Class Initialized
DEBUG - 2019-01-07 12:59:12 011295 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 12:59:12 106257 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 12:59:12 107110 --> Model Class Initialized
DEBUG - 2019-01-07 12:59:12 110023 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 12:59:12 113363 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 12:59:12 115482 --> Helper loaded: file_helper
DEBUG - 2019-01-07 12:59:12 115658 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 12:59:12 117844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 118232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 121676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 122432 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 125230 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 125647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 126327 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 127258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 130079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 130503 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 131195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 131992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 134843 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 135258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 135998 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 137310 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 140314 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 140773 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 141514 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 142700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 145678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 146111 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 146922 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 148771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 152152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 153605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 154912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 203372 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 218063 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 219476 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 222546 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 225218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 228562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 229001 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 229795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 231617 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 234759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 235177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 236040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 237164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 240233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 241198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 244515 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 246368 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 252726 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 253161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 253993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 255781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 258858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 259287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 260124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 261096 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 264218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 264666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 265494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 266436 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 269531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 269958 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 270792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 271749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 274887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 275322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 276161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 277364 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 280494 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 280945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 281866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 303535 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 318355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 319839 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 323067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 325093 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 326739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 328226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 329458 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 330634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 331876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 403090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 404206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 405152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 405996 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 406825 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 407668 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 408485 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 409316 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 410135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 410959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 412066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 412899 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 413731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 414551 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 415343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 416234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 417045 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 417912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 418790 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 419637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 420569 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 423947 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 424380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 425266 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 426156 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 429352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 429826 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 430712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 431607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 440062 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 441518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 443908 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 444971 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 448183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 448658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 449543 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 450531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 453648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 454087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 454972 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 455945 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 459659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 460099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 460994 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 464085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 465161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 468326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 469352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 472454 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 473395 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 476605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 477550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 480653 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 481576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 484802 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:59:12 485711 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 12:59:12 488620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 490535 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 490967 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:12 494041 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:59:12 494801 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 12:59:12 503792 --> Final output sent to browser
DEBUG - 2019-01-07 12:59:12 503936 --> Total execution time: 1.3134
INFO - 2019-01-07 07:29:13 740883 --> Config Class Initialized
INFO - 2019-01-07 07:29:13 741019 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:29:13 742896 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:29:13 743007 --> Utf8 Class Initialized
INFO - 2019-01-07 07:29:13 744276 --> URI Class Initialized
INFO - 2019-01-07 07:29:13 748191 --> Router Class Initialized
INFO - 2019-01-07 07:29:13 750312 --> Output Class Initialized
INFO - 2019-01-07 07:29:13 751924 --> Security Class Initialized
DEBUG - 2019-01-07 07:29:13 754270 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:29:13 754379 --> Input Class Initialized
INFO - 2019-01-07 07:29:13 754898 --> Language Class Initialized
ERROR - 2019-01-07 07:29:13 755714 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 07:29:14 640484 --> Config Class Initialized
INFO - 2019-01-07 07:29:14 640836 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:29:14 642843 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:29:14 642946 --> Utf8 Class Initialized
INFO - 2019-01-07 07:29:14 644253 --> URI Class Initialized
INFO - 2019-01-07 07:29:14 649705 --> Router Class Initialized
INFO - 2019-01-07 07:29:14 651797 --> Output Class Initialized
INFO - 2019-01-07 07:29:14 653361 --> Security Class Initialized
DEBUG - 2019-01-07 07:29:14 655575 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:29:14 655697 --> Input Class Initialized
INFO - 2019-01-07 07:29:14 656181 --> Language Class Initialized
ERROR - 2019-01-07 07:29:14 656999 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:29:14 865015 --> Config Class Initialized
INFO - 2019-01-07 07:29:14 865147 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:29:14 866822 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:29:14 866934 --> Utf8 Class Initialized
INFO - 2019-01-07 07:29:14 868119 --> URI Class Initialized
INFO - 2019-01-07 07:29:14 870892 --> Router Class Initialized
INFO - 2019-01-07 07:29:14 874314 --> Output Class Initialized
INFO - 2019-01-07 07:29:14 877022 --> Security Class Initialized
DEBUG - 2019-01-07 07:29:14 879251 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:29:14 879403 --> Input Class Initialized
INFO - 2019-01-07 07:29:14 880106 --> Language Class Initialized
ERROR - 2019-01-07 07:29:14 880996 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 07:29:15 123666 --> Config Class Initialized
INFO - 2019-01-07 07:29:15 123965 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:29:15 125880 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:29:15 125982 --> Utf8 Class Initialized
INFO - 2019-01-07 07:29:15 127330 --> URI Class Initialized
INFO - 2019-01-07 07:29:15 131778 --> Router Class Initialized
INFO - 2019-01-07 07:29:15 133930 --> Output Class Initialized
INFO - 2019-01-07 07:29:15 135629 --> Security Class Initialized
DEBUG - 2019-01-07 07:29:15 137165 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:29:15 137264 --> Input Class Initialized
INFO - 2019-01-07 07:29:15 137903 --> Language Class Initialized
ERROR - 2019-01-07 07:29:15 138971 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:29:15 356312 --> Config Class Initialized
INFO - 2019-01-07 07:29:15 356673 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:29:15 359777 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:29:15 359920 --> Utf8 Class Initialized
INFO - 2019-01-07 07:29:15 361881 --> URI Class Initialized
INFO - 2019-01-07 07:29:15 365731 --> Router Class Initialized
INFO - 2019-01-07 07:29:15 368567 --> Output Class Initialized
INFO - 2019-01-07 07:29:15 370455 --> Security Class Initialized
DEBUG - 2019-01-07 07:29:15 372016 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:29:15 372118 --> Input Class Initialized
INFO - 2019-01-07 07:29:15 372611 --> Language Class Initialized
ERROR - 2019-01-07 07:29:15 373830 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:29:15 381684 --> Config Class Initialized
INFO - 2019-01-07 07:29:15 381797 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:29:15 383691 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:29:15 383794 --> Utf8 Class Initialized
INFO - 2019-01-07 07:29:15 384884 --> URI Class Initialized
INFO - 2019-01-07 07:29:15 388153 --> Router Class Initialized
INFO - 2019-01-07 07:29:15 390027 --> Output Class Initialized
INFO - 2019-01-07 07:29:15 391810 --> Security Class Initialized
DEBUG - 2019-01-07 07:29:15 393240 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:29:15 393342 --> Input Class Initialized
INFO - 2019-01-07 07:29:15 393815 --> Language Class Initialized
ERROR - 2019-01-07 07:29:15 394567 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:29:15 424572 --> Config Class Initialized
INFO - 2019-01-07 07:29:15 424815 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:29:15 426489 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:29:15 426590 --> Utf8 Class Initialized
INFO - 2019-01-07 07:29:15 427582 --> URI Class Initialized
INFO - 2019-01-07 07:29:15 430078 --> Router Class Initialized
INFO - 2019-01-07 07:29:15 432086 --> Output Class Initialized
INFO - 2019-01-07 07:29:15 433572 --> Security Class Initialized
DEBUG - 2019-01-07 07:29:15 435111 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:29:15 435215 --> Input Class Initialized
INFO - 2019-01-07 07:29:15 435692 --> Language Class Initialized
ERROR - 2019-01-07 07:29:15 436451 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:29:15 475503 --> Config Class Initialized
INFO - 2019-01-07 07:29:15 475665 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:29:15 477792 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:29:15 477922 --> Utf8 Class Initialized
INFO - 2019-01-07 07:29:15 479202 --> URI Class Initialized
INFO - 2019-01-07 07:29:15 482497 --> Router Class Initialized
INFO - 2019-01-07 07:29:15 485054 --> Output Class Initialized
INFO - 2019-01-07 07:29:15 487056 --> Security Class Initialized
DEBUG - 2019-01-07 07:29:15 488976 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:29:15 489105 --> Input Class Initialized
INFO - 2019-01-07 07:29:15 489717 --> Language Class Initialized
ERROR - 2019-01-07 07:29:15 490685 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:29:15 491755 --> Config Class Initialized
INFO - 2019-01-07 07:29:15 492712 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:29:15 494301 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:29:15 494407 --> Utf8 Class Initialized
INFO - 2019-01-07 07:29:15 495333 --> URI Class Initialized
INFO - 2019-01-07 07:29:15 497697 --> Router Class Initialized
INFO - 2019-01-07 07:29:15 499450 --> Output Class Initialized
INFO - 2019-01-07 07:29:15 500823 --> Security Class Initialized
DEBUG - 2019-01-07 07:29:15 502326 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:29:15 502476 --> Input Class Initialized
INFO - 2019-01-07 07:29:15 502918 --> Language Class Initialized
ERROR - 2019-01-07 07:29:15 503631 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:29:16 298655 --> Config Class Initialized
INFO - 2019-01-07 07:29:16 298753 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:29:16 300029 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:29:16 300107 --> Utf8 Class Initialized
INFO - 2019-01-07 07:29:16 300918 --> URI Class Initialized
INFO - 2019-01-07 07:29:16 302591 --> Router Class Initialized
INFO - 2019-01-07 07:29:16 305129 --> Output Class Initialized
INFO - 2019-01-07 07:29:16 307153 --> Security Class Initialized
DEBUG - 2019-01-07 07:29:16 309148 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:29:16 309254 --> Input Class Initialized
INFO - 2019-01-07 07:29:16 309833 --> Language Class Initialized
INFO - 2019-01-07 07:29:16 322694 --> Loader Class Initialized
INFO - 2019-01-07 07:29:16 324894 --> Helper loaded: url_helper
INFO - 2019-01-07 07:29:16 326126 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:59:16 337627 --> Database Driver Class Initialized
INFO - 2019-01-07 12:59:16 343091 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:59:16 344424 --> Controller Class Initialized
INFO - 2019-01-07 12:59:16 345235 --> Final output sent to browser
DEBUG - 2019-01-07 12:59:16 345347 --> Total execution time: 0.0479
INFO - 2019-01-07 07:29:21 637491 --> Config Class Initialized
INFO - 2019-01-07 07:29:21 637748 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:29:21 640058 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:29:21 640144 --> Utf8 Class Initialized
INFO - 2019-01-07 07:29:21 641242 --> URI Class Initialized
INFO - 2019-01-07 07:29:21 644213 --> Router Class Initialized
INFO - 2019-01-07 07:29:21 646326 --> Output Class Initialized
INFO - 2019-01-07 07:29:21 647433 --> Security Class Initialized
DEBUG - 2019-01-07 07:29:21 648776 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:29:21 648848 --> Input Class Initialized
INFO - 2019-01-07 07:29:21 649178 --> Language Class Initialized
ERROR - 2019-01-07 07:29:21 649739 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-07 07:29:59 563527 --> Config Class Initialized
INFO - 2019-01-07 07:29:59 563939 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:29:59 565896 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:29:59 565988 --> Utf8 Class Initialized
INFO - 2019-01-07 07:29:59 567241 --> URI Class Initialized
DEBUG - 2019-01-07 07:29:59 569423 --> No URI present. Default controller set.
INFO - 2019-01-07 07:29:59 569540 --> Router Class Initialized
INFO - 2019-01-07 07:29:59 571322 --> Output Class Initialized
INFO - 2019-01-07 07:29:59 572618 --> Security Class Initialized
DEBUG - 2019-01-07 07:29:59 574578 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:29:59 574666 --> Input Class Initialized
INFO - 2019-01-07 07:29:59 575071 --> Language Class Initialized
INFO - 2019-01-07 07:29:59 578176 --> Loader Class Initialized
INFO - 2019-01-07 07:29:59 579257 --> Helper loaded: url_helper
INFO - 2019-01-07 07:29:59 579848 --> Helper loaded: utility_helper
INFO - 2019-01-07 12:59:59 586637 --> Database Driver Class Initialized
INFO - 2019-01-07 12:59:59 593719 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 12:59:59 594738 --> Controller Class Initialized
INFO - 2019-01-07 12:59:59 595221 --> Parser Class Initialized
INFO - 2019-01-07 12:59:59 596371 --> Helper loaded: html_helper
INFO - 2019-01-07 12:59:59 597136 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 12:59:59 599944 --> Model Class Initialized
DEBUG - 2019-01-07 12:59:59 610791 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 12:59:59 616024 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 12:59:59 616898 --> Model Class Initialized
DEBUG - 2019-01-07 12:59:59 617958 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 12:59:59 623027 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 12:59:59 626131 --> Helper loaded: file_helper
DEBUG - 2019-01-07 12:59:59 626365 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 12:59:59 633635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 639192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 649905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 654767 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 660898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 661633 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 662966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 664597 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 669917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 670650 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 671852 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 673114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 676270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 676707 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 677428 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 678428 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 681364 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 681818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 682581 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 683526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 686413 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 686858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 687623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 688635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 691596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 692018 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 692784 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 693737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 696755 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 697176 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 697956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 698931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 701996 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 702465 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 703232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 704257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 707331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 707815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 708619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 709558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 712666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 713089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 713911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 714914 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 718238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 718707 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 719542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 720498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 723656 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 724108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 724968 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 725898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 729047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 729500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 730325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 731225 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 734358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 736812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 737679 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 738651 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 741801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 742238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 743092 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 743990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 747131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 747590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 748433 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 749351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 752499 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 752934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 753792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 754713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 755633 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 756417 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 757304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 758162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 758954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 759741 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 760520 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 761384 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 762610 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 763473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 764305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 765239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 766164 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 767088 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 767992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 769438 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 770307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 771364 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 772392 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 773425 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 774544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 775563 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 776686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 777705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 778791 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 779917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 784502 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 785056 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 786256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 787331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 791326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 791872 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 792954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 794048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 798002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 798559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 799771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 800756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 804750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 805298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 806376 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 807396 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 811424 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 811974 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 813077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 814079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 817962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 818535 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 819662 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 822273 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 823275 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 827245 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 828218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 832099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 832990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 836030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 836891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 840878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 841804 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 845221 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:59:59 846167 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 12:59:59 849282 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 851284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 851754 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 12:59:59 854983 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 12:59:59 855797 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 12:59:59 864938 --> Final output sent to browser
DEBUG - 2019-01-07 12:59:59 865075 --> Total execution time: 0.2950
INFO - 2019-01-07 07:30:00 121974 --> Config Class Initialized
INFO - 2019-01-07 07:30:00 122072 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:30:00 123311 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:30:00 123383 --> Utf8 Class Initialized
INFO - 2019-01-07 07:30:00 124135 --> URI Class Initialized
INFO - 2019-01-07 07:30:00 126394 --> Router Class Initialized
INFO - 2019-01-07 07:30:00 127738 --> Output Class Initialized
INFO - 2019-01-07 07:30:00 128753 --> Security Class Initialized
DEBUG - 2019-01-07 07:30:00 129733 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:30:00 129802 --> Input Class Initialized
INFO - 2019-01-07 07:30:00 130122 --> Language Class Initialized
INFO - 2019-01-07 07:30:00 137093 --> Config Class Initialized
INFO - 2019-01-07 07:30:00 137275 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:30:00 138580 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:30:00 138648 --> Utf8 Class Initialized
INFO - 2019-01-07 07:30:00 139553 --> URI Class Initialized
INFO - 2019-01-07 07:30:00 141969 --> Router Class Initialized
INFO - 2019-01-07 07:30:00 143388 --> Output Class Initialized
INFO - 2019-01-07 07:30:00 144434 --> Security Class Initialized
DEBUG - 2019-01-07 07:30:00 145478 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:30:00 145549 --> Input Class Initialized
INFO - 2019-01-07 07:30:00 145875 --> Language Class Initialized
ERROR - 2019-01-07 07:30:00 146403 --> 404 Page Not Found: Uploads/gauravgmail.com
ERROR - 2019-01-07 07:30:00 148199 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:30:00 314217 --> Config Class Initialized
INFO - 2019-01-07 07:30:00 316992 --> Config Class Initialized
INFO - 2019-01-07 07:30:00 317236 --> Hooks Class Initialized
INFO - 2019-01-07 07:30:00 319504 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:30:00 323201 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:30:00 323379 --> Utf8 Class Initialized
INFO - 2019-01-07 07:30:00 325649 --> URI Class Initialized
DEBUG - 2019-01-07 07:30:00 332036 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:30:00 332227 --> Utf8 Class Initialized
INFO - 2019-01-07 07:30:00 334342 --> URI Class Initialized
INFO - 2019-01-07 07:30:00 342252 --> Router Class Initialized
INFO - 2019-01-07 07:30:00 342827 --> Router Class Initialized
INFO - 2019-01-07 07:30:00 347014 --> Output Class Initialized
INFO - 2019-01-07 07:30:00 350095 --> Security Class Initialized
INFO - 2019-01-07 07:30:00 356060 --> Output Class Initialized
INFO - 2019-01-07 07:30:00 359715 --> Security Class Initialized
DEBUG - 2019-01-07 07:30:00 364245 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:30:00 364456 --> Input Class Initialized
INFO - 2019-01-07 07:30:00 365494 --> Language Class Initialized
ERROR - 2019-01-07 07:30:00 366939 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-07 07:30:00 368647 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:30:00 368839 --> Input Class Initialized
INFO - 2019-01-07 07:30:00 371953 --> Language Class Initialized
ERROR - 2019-01-07 07:30:00 373507 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:30:00 459311 --> Config Class Initialized
INFO - 2019-01-07 07:30:00 459450 --> Hooks Class Initialized
INFO - 2019-01-07 07:30:00 474265 --> Config Class Initialized
INFO - 2019-01-07 07:30:00 474353 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:30:00 475581 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:30:00 475689 --> Utf8 Class Initialized
INFO - 2019-01-07 07:30:00 476891 --> URI Class Initialized
INFO - 2019-01-07 07:30:00 482070 --> Config Class Initialized
INFO - 2019-01-07 07:30:00 482352 --> Hooks Class Initialized
INFO - 2019-01-07 07:30:00 485609 --> Router Class Initialized
DEBUG - 2019-01-07 07:30:00 488342 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:30:00 488476 --> Utf8 Class Initialized
INFO - 2019-01-07 07:30:00 489626 --> URI Class Initialized
INFO - 2019-01-07 07:30:00 500905 --> Output Class Initialized
INFO - 2019-01-07 07:30:00 502568 --> Security Class Initialized
DEBUG - 2019-01-07 07:30:00 504092 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:30:00 504204 --> Input Class Initialized
INFO - 2019-01-07 07:30:00 504707 --> Language Class Initialized
INFO - 2019-01-07 07:30:00 506422 --> Router Class Initialized
DEBUG - 2019-01-07 07:30:00 511642 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:30:00 511841 --> Utf8 Class Initialized
INFO - 2019-01-07 07:30:00 514945 --> Config Class Initialized
INFO - 2019-01-07 07:30:00 515371 --> Hooks Class Initialized
INFO - 2019-01-07 07:30:00 521522 --> Output Class Initialized
INFO - 2019-01-07 07:30:00 523811 --> Security Class Initialized
INFO - 2019-01-07 07:30:00 525976 --> URI Class Initialized
ERROR - 2019-01-07 07:30:00 529536 --> 404 Page Not Found: Assets/js
DEBUG - 2019-01-07 07:30:00 532533 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:30:00 532649 --> Utf8 Class Initialized
INFO - 2019-01-07 07:30:00 534039 --> URI Class Initialized
INFO - 2019-01-07 07:30:00 536570 --> Router Class Initialized
INFO - 2019-01-07 07:30:00 541558 --> Config Class Initialized
INFO - 2019-01-07 07:30:00 541826 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:30:00 543615 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:30:00 543735 --> Input Class Initialized
INFO - 2019-01-07 07:30:00 544277 --> Language Class Initialized
ERROR - 2019-01-07 07:30:00 545131 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:30:00 547769 --> Router Class Initialized
INFO - 2019-01-07 07:30:00 550103 --> Output Class Initialized
INFO - 2019-01-07 07:30:00 552261 --> Security Class Initialized
DEBUG - 2019-01-07 07:30:00 553946 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:30:00 554054 --> Input Class Initialized
INFO - 2019-01-07 07:30:00 555972 --> Output Class Initialized
INFO - 2019-01-07 07:30:00 557699 --> Security Class Initialized
DEBUG - 2019-01-07 07:30:00 559350 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:30:00 559483 --> Input Class Initialized
INFO - 2019-01-07 07:30:00 560005 --> Language Class Initialized
DEBUG - 2019-01-07 07:30:00 562308 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:30:00 562489 --> Utf8 Class Initialized
INFO - 2019-01-07 07:30:00 564618 --> URI Class Initialized
INFO - 2019-01-07 07:30:00 568742 --> Language Class Initialized
ERROR - 2019-01-07 07:30:00 575937 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:30:00 581418 --> Router Class Initialized
INFO - 2019-01-07 07:30:00 584980 --> Output Class Initialized
INFO - 2019-01-07 07:30:00 587615 --> Security Class Initialized
INFO - 2019-01-07 07:30:00 592427 --> Loader Class Initialized
INFO - 2019-01-07 07:30:00 594551 --> Helper loaded: url_helper
INFO - 2019-01-07 07:30:00 595659 --> Helper loaded: utility_helper
DEBUG - 2019-01-07 07:30:00 603358 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:30:00 603526 --> Input Class Initialized
INFO - 2019-01-07 07:30:00 604307 --> Language Class Initialized
ERROR - 2019-01-07 07:30:00 605560 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 13:00:00 617475 --> Database Driver Class Initialized
INFO - 2019-01-07 13:00:00 625101 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 13:00:00 626385 --> Controller Class Initialized
INFO - 2019-01-07 13:00:00 627280 --> Final output sent to browser
DEBUG - 2019-01-07 13:00:00 627383 --> Total execution time: 0.1331
INFO - 2019-01-07 07:30:00 809603 --> Config Class Initialized
INFO - 2019-01-07 07:30:00 809689 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:30:00 810802 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:30:00 810872 --> Utf8 Class Initialized
INFO - 2019-01-07 07:30:00 811533 --> URI Class Initialized
INFO - 2019-01-07 07:30:00 813585 --> Router Class Initialized
INFO - 2019-01-07 07:30:00 814832 --> Output Class Initialized
INFO - 2019-01-07 07:30:00 815825 --> Security Class Initialized
DEBUG - 2019-01-07 07:30:00 816749 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:30:00 816817 --> Input Class Initialized
INFO - 2019-01-07 07:30:00 817111 --> Language Class Initialized
ERROR - 2019-01-07 07:30:00 817599 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 07:40:09 502645 --> Config Class Initialized
INFO - 2019-01-07 07:40:09 502959 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:40:09 506609 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:40:09 506736 --> Utf8 Class Initialized
INFO - 2019-01-07 07:40:09 508157 --> URI Class Initialized
DEBUG - 2019-01-07 07:40:09 510580 --> No URI present. Default controller set.
INFO - 2019-01-07 07:40:09 510721 --> Router Class Initialized
INFO - 2019-01-07 07:40:09 513376 --> Output Class Initialized
INFO - 2019-01-07 07:40:09 515325 --> Security Class Initialized
DEBUG - 2019-01-07 07:40:09 517272 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:40:09 517396 --> Input Class Initialized
INFO - 2019-01-07 07:40:09 517998 --> Language Class Initialized
INFO - 2019-01-07 07:40:09 521801 --> Loader Class Initialized
INFO - 2019-01-07 07:40:09 523386 --> Helper loaded: url_helper
INFO - 2019-01-07 07:40:09 524328 --> Helper loaded: utility_helper
INFO - 2019-01-07 13:10:09 534481 --> Database Driver Class Initialized
INFO - 2019-01-07 13:10:09 543101 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 13:10:09 544625 --> Controller Class Initialized
INFO - 2019-01-07 13:10:09 545330 --> Parser Class Initialized
INFO - 2019-01-07 13:10:09 546384 --> Helper loaded: html_helper
INFO - 2019-01-07 13:10:09 547473 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 13:10:09 550587 --> Model Class Initialized
DEBUG - 2019-01-07 13:10:09 572571 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 13:10:09 576687 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 13:10:09 577228 --> Model Class Initialized
DEBUG - 2019-01-07 13:10:09 578525 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 13:10:09 580842 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 13:10:09 582314 --> Helper loaded: file_helper
DEBUG - 2019-01-07 13:10:09 582444 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 13:10:09 586468 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 588593 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 597506 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 599276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 601540 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 601874 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 602447 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 603228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 605367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 605725 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 606270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 607263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 609546 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 609864 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 610405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 611860 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 615324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 615694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 616262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 617161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 619386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 619744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 620313 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 621077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 623388 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 623735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 624313 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 625070 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 627357 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 627702 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 628285 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 629111 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 631443 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 631824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 632426 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 633183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 635548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 635883 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 636501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 637339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 639693 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 640022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 640714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 641539 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 643965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 644301 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 644946 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 645842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 648206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 648577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 649218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 650140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 652609 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 652949 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 653599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 654561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 656944 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 657277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 657926 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 658749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 661130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 661474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 662115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 663048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 665482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 665822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 666472 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 667326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 669723 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 670061 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 670718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 671588 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 672343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 673093 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 673840 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 674560 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 675442 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 676207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 676913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 677622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 678348 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 679167 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 679867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 680557 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 681406 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 682296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 683053 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 683870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 684537 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 685172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 685808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 686435 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 687124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 687758 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 688374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 689002 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 689657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 690584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 693218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 693589 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 694267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 695175 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 697619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 697962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 698657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 699552 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 701950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 702287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 702979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 704262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 709827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 710381 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 711513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 712647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 715404 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 715764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 716449 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 717228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 719623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 719965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 720669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 723047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 724472 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 726944 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 727816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 730195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 738118 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 740852 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 741662 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 744119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 744885 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 747405 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 13:10:09 748202 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 13:10:09 750538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 752193 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 752562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 13:10:09 755008 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 13:10:09 755604 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 13:10:09 763773 --> Final output sent to browser
DEBUG - 2019-01-07 13:10:09 763885 --> Total execution time: 0.2561
INFO - 2019-01-07 07:40:10 758239 --> Config Class Initialized
INFO - 2019-01-07 07:40:10 758677 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:40:10 762284 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:40:10 762417 --> Utf8 Class Initialized
INFO - 2019-01-07 07:40:10 764061 --> URI Class Initialized
INFO - 2019-01-07 07:40:10 768685 --> Router Class Initialized
INFO - 2019-01-07 07:40:10 771399 --> Output Class Initialized
INFO - 2019-01-07 07:40:10 773380 --> Security Class Initialized
DEBUG - 2019-01-07 07:40:10 775315 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:40:10 775454 --> Input Class Initialized
INFO - 2019-01-07 07:40:10 776078 --> Language Class Initialized
ERROR - 2019-01-07 07:40:10 777081 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 07:40:11 926188 --> Config Class Initialized
INFO - 2019-01-07 07:40:11 926271 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:40:11 927782 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:40:11 927850 --> Utf8 Class Initialized
INFO - 2019-01-07 07:40:11 928606 --> URI Class Initialized
INFO - 2019-01-07 07:40:11 930360 --> Router Class Initialized
INFO - 2019-01-07 07:40:11 931663 --> Output Class Initialized
INFO - 2019-01-07 07:40:11 933247 --> Security Class Initialized
DEBUG - 2019-01-07 07:40:11 934259 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:40:11 934326 --> Input Class Initialized
INFO - 2019-01-07 07:40:11 934645 --> Language Class Initialized
ERROR - 2019-01-07 07:40:11 935306 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 07:40:12 211235 --> Config Class Initialized
INFO - 2019-01-07 07:40:12 211512 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:40:12 213911 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:40:12 214029 --> Utf8 Class Initialized
INFO - 2019-01-07 07:40:12 216259 --> Config Class Initialized
INFO - 2019-01-07 07:40:12 216336 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:40:12 217489 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:40:12 217556 --> Utf8 Class Initialized
INFO - 2019-01-07 07:40:12 218230 --> URI Class Initialized
INFO - 2019-01-07 07:40:12 220594 --> Router Class Initialized
INFO - 2019-01-07 07:40:12 221821 --> Output Class Initialized
INFO - 2019-01-07 07:40:12 222804 --> Security Class Initialized
DEBUG - 2019-01-07 07:40:12 223725 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:40:12 223793 --> Input Class Initialized
INFO - 2019-01-07 07:40:12 224098 --> Language Class Initialized
INFO - 2019-01-07 07:40:12 225081 --> URI Class Initialized
INFO - 2019-01-07 07:40:12 230037 --> Router Class Initialized
INFO - 2019-01-07 07:40:12 231479 --> Output Class Initialized
INFO - 2019-01-07 07:40:12 232506 --> Security Class Initialized
DEBUG - 2019-01-07 07:40:12 233504 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:40:12 233571 --> Input Class Initialized
INFO - 2019-01-07 07:40:12 233885 --> Language Class Initialized
ERROR - 2019-01-07 07:40:12 234394 --> 404 Page Not Found: Uploads/gauravgmail.com
ERROR - 2019-01-07 07:40:12 235801 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:40:12 334019 --> Config Class Initialized
INFO - 2019-01-07 07:40:12 334264 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:40:12 335848 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:40:12 335956 --> Utf8 Class Initialized
INFO - 2019-01-07 07:40:12 337016 --> URI Class Initialized
INFO - 2019-01-07 07:40:12 340774 --> Router Class Initialized
INFO - 2019-01-07 07:40:12 342135 --> Output Class Initialized
INFO - 2019-01-07 07:40:12 344449 --> Security Class Initialized
DEBUG - 2019-01-07 07:40:12 346849 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:40:12 346951 --> Input Class Initialized
INFO - 2019-01-07 07:40:12 347515 --> Language Class Initialized
ERROR - 2019-01-07 07:40:12 348498 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:40:12 377239 --> Config Class Initialized
INFO - 2019-01-07 07:40:12 377325 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:40:12 378650 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:40:12 378721 --> Utf8 Class Initialized
INFO - 2019-01-07 07:40:12 379374 --> URI Class Initialized
INFO - 2019-01-07 07:40:12 381129 --> Router Class Initialized
INFO - 2019-01-07 07:40:12 382374 --> Output Class Initialized
INFO - 2019-01-07 07:40:12 383363 --> Security Class Initialized
DEBUG - 2019-01-07 07:40:12 384352 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:40:12 384430 --> Input Class Initialized
INFO - 2019-01-07 07:40:12 384752 --> Language Class Initialized
ERROR - 2019-01-07 07:40:12 385245 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:40:12 409076 --> Config Class Initialized
INFO - 2019-01-07 07:40:12 409161 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:40:12 410247 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:40:12 410315 --> Utf8 Class Initialized
INFO - 2019-01-07 07:40:12 410970 --> URI Class Initialized
INFO - 2019-01-07 07:40:12 412637 --> Router Class Initialized
INFO - 2019-01-07 07:40:12 413921 --> Output Class Initialized
INFO - 2019-01-07 07:40:12 414895 --> Security Class Initialized
DEBUG - 2019-01-07 07:40:12 415848 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:40:12 415916 --> Input Class Initialized
INFO - 2019-01-07 07:40:12 416215 --> Language Class Initialized
ERROR - 2019-01-07 07:40:12 416723 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:40:12 424835 --> Config Class Initialized
INFO - 2019-01-07 07:40:12 424909 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:40:12 425983 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:40:12 426052 --> Utf8 Class Initialized
INFO - 2019-01-07 07:40:12 426703 --> URI Class Initialized
INFO - 2019-01-07 07:40:12 428263 --> Router Class Initialized
INFO - 2019-01-07 07:40:12 429476 --> Output Class Initialized
INFO - 2019-01-07 07:40:12 430402 --> Security Class Initialized
DEBUG - 2019-01-07 07:40:12 431296 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:40:12 435107 --> Input Class Initialized
INFO - 2019-01-07 07:40:12 435403 --> Language Class Initialized
ERROR - 2019-01-07 07:40:12 435878 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:40:12 436780 --> Config Class Initialized
INFO - 2019-01-07 07:40:12 436865 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:40:12 437973 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:40:12 438040 --> Utf8 Class Initialized
INFO - 2019-01-07 07:40:12 438694 --> URI Class Initialized
INFO - 2019-01-07 07:40:12 440346 --> Router Class Initialized
INFO - 2019-01-07 07:40:12 441667 --> Output Class Initialized
INFO - 2019-01-07 07:40:12 442673 --> Security Class Initialized
DEBUG - 2019-01-07 07:40:12 443633 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:40:12 443700 --> Input Class Initialized
INFO - 2019-01-07 07:40:12 444000 --> Language Class Initialized
ERROR - 2019-01-07 07:40:12 444494 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 07:40:12 936749 --> Config Class Initialized
INFO - 2019-01-07 07:40:12 936863 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:40:12 938846 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:40:12 938954 --> Utf8 Class Initialized
INFO - 2019-01-07 07:40:12 940541 --> URI Class Initialized
INFO - 2019-01-07 07:40:12 944406 --> Router Class Initialized
INFO - 2019-01-07 07:40:12 946607 --> Output Class Initialized
INFO - 2019-01-07 07:40:12 948688 --> Security Class Initialized
DEBUG - 2019-01-07 07:40:12 950489 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:40:12 950560 --> Input Class Initialized
INFO - 2019-01-07 07:40:12 950923 --> Language Class Initialized
INFO - 2019-01-07 07:40:12 957212 --> Loader Class Initialized
INFO - 2019-01-07 07:40:12 958839 --> Helper loaded: url_helper
INFO - 2019-01-07 07:40:12 959806 --> Helper loaded: utility_helper
INFO - 2019-01-07 13:10:12 971179 --> Database Driver Class Initialized
INFO - 2019-01-07 13:10:12 981453 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 13:10:12 982920 --> Controller Class Initialized
INFO - 2019-01-07 13:10:12 983922 --> Final output sent to browser
DEBUG - 2019-01-07 13:10:12 984077 --> Total execution time: 0.0487
INFO - 2019-01-07 07:40:17 916134 --> Config Class Initialized
INFO - 2019-01-07 07:40:17 916507 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:40:17 919068 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:40:17 919200 --> Utf8 Class Initialized
INFO - 2019-01-07 07:40:17 920888 --> URI Class Initialized
INFO - 2019-01-07 07:40:17 948724 --> Router Class Initialized
INFO - 2019-01-07 07:40:17 951685 --> Output Class Initialized
INFO - 2019-01-07 07:40:17 953757 --> Security Class Initialized
DEBUG - 2019-01-07 07:40:17 955806 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:40:17 955940 --> Input Class Initialized
INFO - 2019-01-07 07:40:17 957140 --> Language Class Initialized
INFO - 2019-01-07 07:40:17 970788 --> Loader Class Initialized
INFO - 2019-01-07 07:40:17 972527 --> Helper loaded: url_helper
INFO - 2019-01-07 07:40:17 973412 --> Helper loaded: utility_helper
INFO - 2019-01-07 13:10:17 984244 --> Database Driver Class Initialized
INFO - 2019-01-07 13:10:18 003129 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 13:10:18 004699 --> Controller Class Initialized
INFO - 2019-01-07 07:40:18 097286 --> Config Class Initialized
INFO - 2019-01-07 07:40:18 097481 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:40:18 099816 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:40:18 099951 --> Utf8 Class Initialized
INFO - 2019-01-07 07:40:18 101311 --> URI Class Initialized
INFO - 2019-01-07 07:40:18 106594 --> Router Class Initialized
INFO - 2019-01-07 07:40:18 112354 --> Output Class Initialized
INFO - 2019-01-07 07:40:18 115880 --> Security Class Initialized
DEBUG - 2019-01-07 07:40:18 119070 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:40:18 119265 --> Input Class Initialized
INFO - 2019-01-07 07:40:18 120187 --> Language Class Initialized
INFO - 2019-01-07 07:40:18 131490 --> Loader Class Initialized
INFO - 2019-01-07 07:40:18 133351 --> Helper loaded: url_helper
INFO - 2019-01-07 07:40:18 134521 --> Helper loaded: utility_helper
INFO - 2019-01-07 13:10:18 149146 --> Database Driver Class Initialized
INFO - 2019-01-07 13:10:18 155617 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 13:10:18 157452 --> Controller Class Initialized
DEBUG - 2019-01-07 13:10:18 157607 --> In LOGOUT
INFO - 2019-01-07 07:40:26 765692 --> Config Class Initialized
INFO - 2019-01-07 07:40:26 765969 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:40:26 767882 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:40:26 767981 --> Utf8 Class Initialized
INFO - 2019-01-07 07:40:26 769331 --> URI Class Initialized
INFO - 2019-01-07 07:40:26 772945 --> Router Class Initialized
INFO - 2019-01-07 07:40:26 775073 --> Output Class Initialized
INFO - 2019-01-07 07:40:26 776623 --> Security Class Initialized
DEBUG - 2019-01-07 07:40:26 778110 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:40:26 778208 --> Input Class Initialized
INFO - 2019-01-07 07:40:26 778697 --> Language Class Initialized
ERROR - 2019-01-07 07:40:26 779474 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-07 07:44:36 833776 --> Config Class Initialized
INFO - 2019-01-07 07:44:36 834135 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:44:36 837155 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:44:36 837287 --> Utf8 Class Initialized
INFO - 2019-01-07 07:44:36 839076 --> URI Class Initialized
INFO - 2019-01-07 07:44:36 844268 --> Router Class Initialized
INFO - 2019-01-07 07:44:36 847309 --> Output Class Initialized
INFO - 2019-01-07 07:44:36 849380 --> Security Class Initialized
DEBUG - 2019-01-07 07:44:36 851948 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:44:36 852085 --> Input Class Initialized
INFO - 2019-01-07 07:44:36 852730 --> Language Class Initialized
ERROR - 2019-01-07 07:44:36 853919 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 07:44:36 868702 --> Config Class Initialized
INFO - 2019-01-07 07:44:36 869033 --> Hooks Class Initialized
DEBUG - 2019-01-07 07:44:36 871495 --> UTF-8 Support Enabled
INFO - 2019-01-07 07:44:36 871623 --> Utf8 Class Initialized
INFO - 2019-01-07 07:44:36 873279 --> URI Class Initialized
INFO - 2019-01-07 07:44:36 877944 --> Router Class Initialized
INFO - 2019-01-07 07:44:36 880716 --> Output Class Initialized
INFO - 2019-01-07 07:44:36 882716 --> Security Class Initialized
DEBUG - 2019-01-07 07:44:36 884651 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 07:44:36 884778 --> Input Class Initialized
INFO - 2019-01-07 07:44:36 885392 --> Language Class Initialized
ERROR - 2019-01-07 07:44:36 886393 --> 404 Page Not Found: Assets/js
INFO - 2019-01-07 08:44:51 375288 --> Config Class Initialized
INFO - 2019-01-07 08:44:51 377988 --> Hooks Class Initialized
DEBUG - 2019-01-07 08:44:51 397629 --> UTF-8 Support Enabled
INFO - 2019-01-07 08:44:51 397737 --> Utf8 Class Initialized
INFO - 2019-01-07 08:44:51 400568 --> URI Class Initialized
DEBUG - 2019-01-07 08:44:51 411604 --> No URI present. Default controller set.
INFO - 2019-01-07 08:44:51 411813 --> Router Class Initialized
INFO - 2019-01-07 08:44:51 426167 --> Output Class Initialized
INFO - 2019-01-07 08:44:51 436197 --> Security Class Initialized
DEBUG - 2019-01-07 08:44:51 453252 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 08:44:51 453512 --> Input Class Initialized
INFO - 2019-01-07 08:44:51 454385 --> Language Class Initialized
INFO - 2019-01-07 08:44:51 475884 --> Loader Class Initialized
INFO - 2019-01-07 08:44:51 483278 --> Helper loaded: url_helper
INFO - 2019-01-07 08:44:51 494793 --> Helper loaded: utility_helper
INFO - 2019-01-07 14:14:51 517254 --> Database Driver Class Initialized
INFO - 2019-01-07 14:14:51 544852 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 14:14:51 551409 --> Controller Class Initialized
INFO - 2019-01-07 14:14:51 552385 --> Parser Class Initialized
INFO - 2019-01-07 14:14:51 553196 --> Helper loaded: html_helper
INFO - 2019-01-07 14:14:51 561579 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 14:14:51 567852 --> Model Class Initialized
DEBUG - 2019-01-07 14:14:51 597731 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 14:14:51 606344 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 14:14:51 614042 --> Model Class Initialized
DEBUG - 2019-01-07 14:14:51 616205 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 14:14:51 629008 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 14:14:51 636178 --> Helper loaded: file_helper
DEBUG - 2019-01-07 14:14:51 636424 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 14:14:51 655395 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 666558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 685276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 694165 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 699564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 701088 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 702277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 703711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 706347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 706713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 707304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 708295 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 710778 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 711119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 711728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 712903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 716562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 716929 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 717559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 718481 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 720980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 721349 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 721976 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 722940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 725734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 726099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 726741 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 727823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 730634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 731024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 731668 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 732676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 735383 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 735768 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 736406 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 737423 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 740200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 740585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 741233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 742238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 745121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 745531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 746198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 747291 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 750159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 750556 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 751233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 752326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 755117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 755536 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 756236 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 757204 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 759948 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 760312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 761014 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 762052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 764754 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 765114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 765810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 766793 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 769453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 769818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 770576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 771585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 774251 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 774641 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 775325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 776325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 778978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 779346 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 780041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 781089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 781889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 782685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 783495 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 784256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 785036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 785808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 786729 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 787801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 788577 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 789288 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 790039 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 790781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 791558 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 792314 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 793095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 794100 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 794827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 795506 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 796161 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 796833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 797580 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 798233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 798902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 799575 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 800252 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 801167 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 804075 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 804461 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 805186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 806066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 808821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 809202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 809958 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 810944 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 813674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 814048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 814789 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 816008 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 819884 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 820286 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 821088 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 822321 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 825923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 826317 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 827064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 829303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 833122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 833622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 834455 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 837927 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 838959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 842243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 843147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 846333 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 847234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 850725 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 852344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 855071 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 856317 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 859220 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 14:14:51 860332 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 14:14:51 862982 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 865140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 865536 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 14:14:51 868722 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 14:14:51 869364 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 14:14:51 878304 --> Final output sent to browser
DEBUG - 2019-01-07 14:14:51 878438 --> Total execution time: 0.5186
INFO - 2019-01-07 08:44:53 387623 --> Config Class Initialized
INFO - 2019-01-07 08:44:53 387815 --> Hooks Class Initialized
DEBUG - 2019-01-07 08:44:53 389270 --> UTF-8 Support Enabled
INFO - 2019-01-07 08:44:53 389345 --> Utf8 Class Initialized
INFO - 2019-01-07 08:44:53 390280 --> URI Class Initialized
INFO - 2019-01-07 08:44:53 391974 --> Router Class Initialized
INFO - 2019-01-07 08:44:53 393553 --> Output Class Initialized
INFO - 2019-01-07 08:44:53 394716 --> Security Class Initialized
DEBUG - 2019-01-07 08:44:53 395870 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 08:44:53 395947 --> Input Class Initialized
INFO - 2019-01-07 08:44:53 396302 --> Language Class Initialized
INFO - 2019-01-07 08:44:53 417788 --> Loader Class Initialized
INFO - 2019-01-07 08:44:53 419431 --> Helper loaded: url_helper
INFO - 2019-01-07 08:44:53 420306 --> Helper loaded: utility_helper
INFO - 2019-01-07 14:14:53 430840 --> Database Driver Class Initialized
INFO - 2019-01-07 14:14:53 439222 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 14:14:53 440707 --> Controller Class Initialized
INFO - 2019-01-07 14:14:53 441761 --> Final output sent to browser
DEBUG - 2019-01-07 14:14:53 441885 --> Total execution time: 0.0554
INFO - 2019-01-07 08:44:54 844480 --> Config Class Initialized
INFO - 2019-01-07 08:44:54 844702 --> Hooks Class Initialized
DEBUG - 2019-01-07 08:44:54 846255 --> UTF-8 Support Enabled
INFO - 2019-01-07 08:44:54 846338 --> Utf8 Class Initialized
INFO - 2019-01-07 08:44:54 847381 --> URI Class Initialized
INFO - 2019-01-07 08:44:54 850702 --> Router Class Initialized
INFO - 2019-01-07 08:44:54 852663 --> Output Class Initialized
INFO - 2019-01-07 08:44:54 853924 --> Security Class Initialized
DEBUG - 2019-01-07 08:44:54 855621 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 08:44:54 855705 --> Input Class Initialized
INFO - 2019-01-07 08:44:54 856096 --> Language Class Initialized
ERROR - 2019-01-07 08:44:54 867500 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 08:44:54 892218 --> Config Class Initialized
INFO - 2019-01-07 08:44:54 892461 --> Hooks Class Initialized
DEBUG - 2019-01-07 08:44:54 894056 --> UTF-8 Support Enabled
INFO - 2019-01-07 08:44:54 894140 --> Utf8 Class Initialized
INFO - 2019-01-07 08:44:54 895653 --> URI Class Initialized
INFO - 2019-01-07 08:44:54 900307 --> Router Class Initialized
INFO - 2019-01-07 08:44:54 902301 --> Output Class Initialized
INFO - 2019-01-07 08:44:54 903641 --> Security Class Initialized
DEBUG - 2019-01-07 08:44:54 904879 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 08:44:54 904963 --> Input Class Initialized
INFO - 2019-01-07 08:44:54 905350 --> Language Class Initialized
ERROR - 2019-01-07 08:44:54 906301 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 08:44:55 014560 --> Config Class Initialized
INFO - 2019-01-07 08:44:55 014723 --> Hooks Class Initialized
DEBUG - 2019-01-07 08:44:55 016900 --> UTF-8 Support Enabled
INFO - 2019-01-07 08:44:55 016974 --> Utf8 Class Initialized
INFO - 2019-01-07 08:44:55 018332 --> URI Class Initialized
INFO - 2019-01-07 08:44:55 030982 --> Config Class Initialized
INFO - 2019-01-07 08:44:55 031234 --> Hooks Class Initialized
INFO - 2019-01-07 08:44:55 034039 --> Router Class Initialized
INFO - 2019-01-07 08:44:55 036627 --> Output Class Initialized
INFO - 2019-01-07 08:44:55 038415 --> Security Class Initialized
DEBUG - 2019-01-07 08:44:55 040180 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 08:44:55 040287 --> Input Class Initialized
INFO - 2019-01-07 08:44:55 041049 --> Language Class Initialized
DEBUG - 2019-01-07 08:44:55 043909 --> UTF-8 Support Enabled
INFO - 2019-01-07 08:44:55 044013 --> Utf8 Class Initialized
INFO - 2019-01-07 08:44:55 045742 --> URI Class Initialized
INFO - 2019-01-07 08:44:55 050473 --> Router Class Initialized
INFO - 2019-01-07 08:44:55 053122 --> Output Class Initialized
ERROR - 2019-01-07 08:44:55 054960 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 08:44:55 057581 --> Security Class Initialized
DEBUG - 2019-01-07 08:44:55 059539 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 08:44:55 059668 --> Input Class Initialized
INFO - 2019-01-07 08:44:55 060272 --> Language Class Initialized
ERROR - 2019-01-07 08:44:55 061261 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 08:44:55 093552 --> Config Class Initialized
INFO - 2019-01-07 08:44:55 093707 --> Hooks Class Initialized
INFO - 2019-01-07 08:44:55 099845 --> Config Class Initialized
INFO - 2019-01-07 08:44:55 099942 --> Hooks Class Initialized
DEBUG - 2019-01-07 08:44:55 101334 --> UTF-8 Support Enabled
INFO - 2019-01-07 08:44:55 101422 --> Utf8 Class Initialized
INFO - 2019-01-07 08:44:55 102694 --> URI Class Initialized
INFO - 2019-01-07 08:44:55 105119 --> Router Class Initialized
DEBUG - 2019-01-07 08:44:55 106019 --> UTF-8 Support Enabled
INFO - 2019-01-07 08:44:55 106108 --> Utf8 Class Initialized
INFO - 2019-01-07 08:44:55 106962 --> URI Class Initialized
INFO - 2019-01-07 08:44:55 109652 --> Router Class Initialized
INFO - 2019-01-07 08:44:55 111335 --> Output Class Initialized
INFO - 2019-01-07 08:44:55 112714 --> Security Class Initialized
DEBUG - 2019-01-07 08:44:55 114324 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 08:44:55 114413 --> Input Class Initialized
INFO - 2019-01-07 08:44:55 114820 --> Language Class Initialized
INFO - 2019-01-07 08:44:55 117289 --> Output Class Initialized
INFO - 2019-01-07 08:44:55 118594 --> Security Class Initialized
DEBUG - 2019-01-07 08:44:55 119846 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 08:44:55 119935 --> Input Class Initialized
INFO - 2019-01-07 08:44:55 120330 --> Language Class Initialized
ERROR - 2019-01-07 08:44:55 121253 --> 404 Page Not Found: Uploads/gauravgmail.com
ERROR - 2019-01-07 08:44:55 122509 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 08:44:55 146934 --> Config Class Initialized
INFO - 2019-01-07 08:44:55 147018 --> Hooks Class Initialized
DEBUG - 2019-01-07 08:44:55 149005 --> UTF-8 Support Enabled
INFO - 2019-01-07 08:44:55 149143 --> Utf8 Class Initialized
INFO - 2019-01-07 08:44:55 150546 --> URI Class Initialized
INFO - 2019-01-07 08:44:55 153459 --> Router Class Initialized
INFO - 2019-01-07 08:44:55 155924 --> Output Class Initialized
INFO - 2019-01-07 08:44:55 158653 --> Security Class Initialized
DEBUG - 2019-01-07 08:44:55 160830 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 08:44:55 160908 --> Input Class Initialized
INFO - 2019-01-07 08:44:55 161470 --> Language Class Initialized
ERROR - 2019-01-07 08:44:55 162396 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 08:44:56 508862 --> Config Class Initialized
INFO - 2019-01-07 08:44:56 509124 --> Hooks Class Initialized
DEBUG - 2019-01-07 08:44:56 511475 --> UTF-8 Support Enabled
INFO - 2019-01-07 08:44:56 511555 --> Utf8 Class Initialized
INFO - 2019-01-07 08:44:56 513004 --> URI Class Initialized
INFO - 2019-01-07 08:44:56 517544 --> Router Class Initialized
INFO - 2019-01-07 08:44:56 519767 --> Output Class Initialized
INFO - 2019-01-07 08:44:56 521833 --> Security Class Initialized
DEBUG - 2019-01-07 08:44:56 523829 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 08:44:56 523957 --> Input Class Initialized
INFO - 2019-01-07 08:44:56 524513 --> Language Class Initialized
ERROR - 2019-01-07 08:44:56 525271 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-07 11:48:51 122793 --> Config Class Initialized
INFO - 2019-01-07 11:48:51 133615 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:48:51 174521 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:48:51 174700 --> Utf8 Class Initialized
INFO - 2019-01-07 11:48:51 176611 --> URI Class Initialized
DEBUG - 2019-01-07 11:48:51 183290 --> No URI present. Default controller set.
INFO - 2019-01-07 11:48:51 183456 --> Router Class Initialized
INFO - 2019-01-07 11:48:51 189623 --> Output Class Initialized
INFO - 2019-01-07 11:48:51 192111 --> Security Class Initialized
DEBUG - 2019-01-07 11:48:51 201360 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:48:51 201544 --> Input Class Initialized
INFO - 2019-01-07 11:48:51 202455 --> Language Class Initialized
INFO - 2019-01-07 11:48:51 229352 --> Loader Class Initialized
INFO - 2019-01-07 11:48:51 244525 --> Helper loaded: url_helper
INFO - 2019-01-07 11:48:51 256051 --> Helper loaded: utility_helper
INFO - 2019-01-07 17:18:51 276376 --> Database Driver Class Initialized
INFO - 2019-01-07 17:18:51 337352 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 17:18:51 349181 --> Controller Class Initialized
INFO - 2019-01-07 17:18:51 350805 --> Parser Class Initialized
INFO - 2019-01-07 17:18:51 353051 --> Helper loaded: html_helper
INFO - 2019-01-07 17:18:51 362848 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 17:18:51 371795 --> Model Class Initialized
DEBUG - 2019-01-07 17:18:51 409459 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 17:18:51 415553 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 17:18:51 420702 --> Model Class Initialized
DEBUG - 2019-01-07 17:18:51 423233 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 17:18:51 439932 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 17:18:51 445736 --> Helper loaded: file_helper
DEBUG - 2019-01-07 17:18:51 445926 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 17:18:51 454907 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 462307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 482014 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 490684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 496531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 497287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 498624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 499942 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 505588 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 506376 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 507793 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 509525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 514913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 515732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 516967 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 518404 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 523478 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 524262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 525579 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 527044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 532337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 533097 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 534446 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 535934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 541429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 542155 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 543502 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 544816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 548022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 548475 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 549253 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 550438 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 553565 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 554003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 554804 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 555955 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 559139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 559600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 560375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 561561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 564758 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 565191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 566107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 567137 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 570416 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 571827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 575134 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 576991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 592215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 592827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 593698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 594815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 598040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 598505 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 599361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 600289 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 603477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 603912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 604769 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 605678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 608930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 609375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 610265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 611138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 619261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 619746 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 620620 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 621547 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 629781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 631108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 632725 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 633997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 634972 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 635910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 636841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 637795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 638772 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 639717 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 640656 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 641685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 642657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 643615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 644576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 645523 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 646475 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 647408 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 648365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 650302 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 651810 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 653412 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 654779 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 655623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 656548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 657354 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 658183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 659010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 659867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 661046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 664566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 666174 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 667112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 668261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 671703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 672168 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 673089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 674210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 685750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 687290 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 690897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 692686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 708286 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 709870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 713524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 715203 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 726634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 727124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 728049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 729067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 735518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 735990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 736937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 740523 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 741624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 744847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 745726 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 748883 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 749845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 754190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 755120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 758440 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 759277 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 763293 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 17:18:51 764379 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 17:18:51 775826 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 777931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 778386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:18:51 782727 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 17:18:51 784123 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 17:18:51 794296 --> Final output sent to browser
DEBUG - 2019-01-07 17:18:51 794456 --> Total execution time: 0.6832
INFO - 2019-01-07 11:48:53 948359 --> Config Class Initialized
INFO - 2019-01-07 11:48:53 948517 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:48:53 949908 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:48:53 949981 --> Utf8 Class Initialized
INFO - 2019-01-07 11:48:53 951056 --> URI Class Initialized
INFO - 2019-01-07 11:48:53 954588 --> Router Class Initialized
INFO - 2019-01-07 11:48:53 957380 --> Output Class Initialized
INFO - 2019-01-07 11:48:53 960120 --> Security Class Initialized
DEBUG - 2019-01-07 11:48:53 962594 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:48:53 962735 --> Input Class Initialized
INFO - 2019-01-07 11:48:53 963105 --> Language Class Initialized
INFO - 2019-01-07 11:48:53 980428 --> Loader Class Initialized
INFO - 2019-01-07 11:48:53 981503 --> Helper loaded: url_helper
INFO - 2019-01-07 11:48:53 981950 --> Helper loaded: utility_helper
INFO - 2019-01-07 17:18:53 987884 --> Database Driver Class Initialized
INFO - 2019-01-07 17:18:53 993118 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 17:18:53 994534 --> Controller Class Initialized
INFO - 2019-01-07 17:18:53 995177 --> Final output sent to browser
DEBUG - 2019-01-07 17:18:53 995248 --> Total execution time: 0.0479
INFO - 2019-01-07 11:48:54 232207 --> Config Class Initialized
INFO - 2019-01-07 11:48:54 232301 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:48:54 241677 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:48:54 241781 --> Utf8 Class Initialized
INFO - 2019-01-07 11:48:54 242580 --> URI Class Initialized
INFO - 2019-01-07 11:48:54 245141 --> Router Class Initialized
INFO - 2019-01-07 11:48:54 246500 --> Output Class Initialized
INFO - 2019-01-07 11:48:54 247553 --> Security Class Initialized
DEBUG - 2019-01-07 11:48:54 248471 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:48:54 248543 --> Input Class Initialized
INFO - 2019-01-07 11:48:54 248851 --> Language Class Initialized
ERROR - 2019-01-07 11:48:54 278911 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 11:48:54 341455 --> Config Class Initialized
INFO - 2019-01-07 11:48:54 341711 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:48:54 350871 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:48:54 351003 --> Utf8 Class Initialized
INFO - 2019-01-07 11:48:54 352299 --> URI Class Initialized
INFO - 2019-01-07 11:48:54 363271 --> Router Class Initialized
INFO - 2019-01-07 11:48:54 365529 --> Output Class Initialized
INFO - 2019-01-07 11:48:54 367168 --> Security Class Initialized
INFO - 2019-01-07 11:48:54 369266 --> Config Class Initialized
INFO - 2019-01-07 11:48:54 369517 --> Hooks Class Initialized
INFO - 2019-01-07 11:48:54 372986 --> Config Class Initialized
INFO - 2019-01-07 11:48:54 373224 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:48:54 375164 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:48:54 375257 --> Utf8 Class Initialized
DEBUG - 2019-01-07 11:48:54 380650 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:48:54 380776 --> Utf8 Class Initialized
INFO - 2019-01-07 11:48:54 382100 --> URI Class Initialized
DEBUG - 2019-01-07 11:48:54 387363 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:48:54 387593 --> Input Class Initialized
INFO - 2019-01-07 11:48:54 388567 --> Language Class Initialized
ERROR - 2019-01-07 11:48:54 390141 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 11:48:54 391740 --> URI Class Initialized
INFO - 2019-01-07 11:48:54 402865 --> Router Class Initialized
INFO - 2019-01-07 11:48:54 418880 --> Output Class Initialized
INFO - 2019-01-07 11:48:54 430921 --> Router Class Initialized
INFO - 2019-01-07 11:48:54 434988 --> Security Class Initialized
INFO - 2019-01-07 11:48:54 449270 --> Config Class Initialized
INFO - 2019-01-07 11:48:54 453372 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:48:54 456145 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:48:54 456274 --> Utf8 Class Initialized
INFO - 2019-01-07 11:48:54 457485 --> Output Class Initialized
INFO - 2019-01-07 11:48:54 458425 --> Config Class Initialized
INFO - 2019-01-07 11:48:54 458601 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:48:54 459625 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:48:54 459777 --> Input Class Initialized
INFO - 2019-01-07 11:48:54 460475 --> Language Class Initialized
ERROR - 2019-01-07 11:48:54 468494 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-07 11:48:54 472187 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:48:54 472330 --> Utf8 Class Initialized
INFO - 2019-01-07 11:48:54 473659 --> URI Class Initialized
INFO - 2019-01-07 11:48:54 476495 --> URI Class Initialized
INFO - 2019-01-07 11:48:54 481247 --> Router Class Initialized
INFO - 2019-01-07 11:48:54 481496 --> Security Class Initialized
DEBUG - 2019-01-07 11:48:54 483504 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:48:54 483637 --> Input Class Initialized
INFO - 2019-01-07 11:48:54 484256 --> Language Class Initialized
ERROR - 2019-01-07 11:48:54 485263 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 11:48:54 488929 --> Config Class Initialized
INFO - 2019-01-07 11:48:54 489242 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:48:54 491791 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:48:54 491919 --> Utf8 Class Initialized
INFO - 2019-01-07 11:48:54 494966 --> Output Class Initialized
INFO - 2019-01-07 11:48:54 497005 --> Security Class Initialized
INFO - 2019-01-07 11:48:54 499172 --> Router Class Initialized
INFO - 2019-01-07 11:48:54 501682 --> Output Class Initialized
INFO - 2019-01-07 11:48:54 503617 --> Security Class Initialized
DEBUG - 2019-01-07 11:48:54 505342 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2019-01-07 11:48:54 507019 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:48:54 507154 --> Input Class Initialized
INFO - 2019-01-07 11:48:54 507895 --> Language Class Initialized
ERROR - 2019-01-07 11:48:54 508915 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 11:48:54 512897 --> URI Class Initialized
INFO - 2019-01-07 11:48:54 517605 --> Router Class Initialized
INFO - 2019-01-07 11:48:54 518524 --> Input Class Initialized
INFO - 2019-01-07 11:48:54 519160 --> Language Class Initialized
ERROR - 2019-01-07 11:48:54 520149 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 11:48:54 523972 --> Output Class Initialized
INFO - 2019-01-07 11:48:54 526119 --> Security Class Initialized
DEBUG - 2019-01-07 11:48:54 528045 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:48:54 528177 --> Input Class Initialized
INFO - 2019-01-07 11:48:54 528829 --> Language Class Initialized
ERROR - 2019-01-07 11:48:54 529839 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 11:50:11 184290 --> Config Class Initialized
INFO - 2019-01-07 11:50:11 184717 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:50:11 188364 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:50:11 188565 --> Utf8 Class Initialized
INFO - 2019-01-07 11:50:11 190382 --> URI Class Initialized
DEBUG - 2019-01-07 11:50:11 192915 --> No URI present. Default controller set.
INFO - 2019-01-07 11:50:11 193137 --> Router Class Initialized
INFO - 2019-01-07 11:50:11 195859 --> Output Class Initialized
INFO - 2019-01-07 11:50:11 197725 --> Security Class Initialized
DEBUG - 2019-01-07 11:50:11 199486 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:50:11 199611 --> Input Class Initialized
INFO - 2019-01-07 11:50:11 200180 --> Language Class Initialized
INFO - 2019-01-07 11:50:11 203845 --> Loader Class Initialized
INFO - 2019-01-07 11:50:11 205657 --> Helper loaded: url_helper
INFO - 2019-01-07 11:50:11 206712 --> Helper loaded: utility_helper
INFO - 2019-01-07 17:20:11 216783 --> Database Driver Class Initialized
INFO - 2019-01-07 17:20:11 225888 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 17:20:11 227044 --> Controller Class Initialized
INFO - 2019-01-07 17:20:11 227622 --> Parser Class Initialized
INFO - 2019-01-07 17:20:11 228456 --> Helper loaded: html_helper
INFO - 2019-01-07 17:20:11 229332 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-07 17:20:11 231823 --> Model Class Initialized
DEBUG - 2019-01-07 17:20:11 242175 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-07 17:20:11 248018 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-07'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-07 17:20:11 248648 --> Model Class Initialized
DEBUG - 2019-01-07 17:20:11 249285 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-07 17:20:11 251940 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 17:20:11 253535 --> Helper loaded: file_helper
DEBUG - 2019-01-07 17:20:11 253671 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 17:20:11 257119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 258553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 266654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 268362 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 270670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 271009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 271590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 272366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 276094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 276421 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 276993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 277730 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 280011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 280328 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 280935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 281703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 283972 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 284310 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 284959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 285722 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 288866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 289382 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 290334 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 291265 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 293638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 293966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 294532 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 295219 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 297415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 297741 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 298312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 298975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 301260 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 301609 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 302212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 302936 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 308128 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 308667 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 309711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 310647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 314882 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 315408 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 316441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 317495 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 320132 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 320497 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 321158 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 321957 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 324378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 324737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 325440 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 326206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 328663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 328999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 329688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 330460 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 332889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 333228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 333930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 334700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 337122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 337502 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 338145 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 338902 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 341332 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 341715 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 342356 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 343143 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 345607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 345969 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 346632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 347362 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 348098 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 348790 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 349482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 350177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 350981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 351666 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 352385 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 353070 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 353748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 354465 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 355137 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 355811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 356518 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 357201 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 357887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 358659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 359297 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 359937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 361032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 362580 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 363267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 363903 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 364571 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 365192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 365849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 366602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 369227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 369591 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 370270 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 371037 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 373650 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 374027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 374802 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 375550 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 379085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 379446 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 380126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 380870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 383754 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 384111 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 384898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 385879 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 390650 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 391011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 391794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 393687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 397305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 397684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 398380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 400780 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 401583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 404062 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 404829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 407232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 408010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 410532 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 411293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 413732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 414508 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 416951 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 17:20:11 417695 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-07 17:20:11 419972 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 421485 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 421828 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:11 424236 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 17:20:11 424829 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 17:20:11 433482 --> Final output sent to browser
DEBUG - 2019-01-07 17:20:11 433593 --> Total execution time: 0.2447
INFO - 2019-01-07 11:50:14 026437 --> Config Class Initialized
INFO - 2019-01-07 11:50:14 026767 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:50:14 029182 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:50:14 029310 --> Utf8 Class Initialized
INFO - 2019-01-07 11:50:14 030895 --> URI Class Initialized
INFO - 2019-01-07 11:50:14 033747 --> Router Class Initialized
INFO - 2019-01-07 11:50:14 036346 --> Output Class Initialized
INFO - 2019-01-07 11:50:14 038304 --> Security Class Initialized
DEBUG - 2019-01-07 11:50:14 040117 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:50:14 040246 --> Input Class Initialized
INFO - 2019-01-07 11:50:14 040910 --> Language Class Initialized
INFO - 2019-01-07 11:50:14 048877 --> Loader Class Initialized
INFO - 2019-01-07 11:50:14 050508 --> Helper loaded: url_helper
INFO - 2019-01-07 11:50:14 051331 --> Helper loaded: utility_helper
INFO - 2019-01-07 17:20:14 061743 --> Database Driver Class Initialized
INFO - 2019-01-07 17:20:14 070266 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 17:20:14 071762 --> Controller Class Initialized
INFO - 2019-01-07 17:20:14 072770 --> Final output sent to browser
DEBUG - 2019-01-07 17:20:14 072892 --> Total execution time: 0.0484
INFO - 2019-01-07 11:50:15 413111 --> Config Class Initialized
INFO - 2019-01-07 11:50:15 413566 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:50:15 417767 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:50:15 417962 --> Utf8 Class Initialized
INFO - 2019-01-07 11:50:15 420562 --> URI Class Initialized
INFO - 2019-01-07 11:50:15 427838 --> Router Class Initialized
INFO - 2019-01-07 11:50:15 430660 --> Output Class Initialized
INFO - 2019-01-07 11:50:15 432718 --> Security Class Initialized
DEBUG - 2019-01-07 11:50:15 434803 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:50:15 434936 --> Input Class Initialized
INFO - 2019-01-07 11:50:15 435683 --> Language Class Initialized
ERROR - 2019-01-07 11:50:15 437601 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 11:50:15 457335 --> Config Class Initialized
INFO - 2019-01-07 11:50:15 457602 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:50:15 459813 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:50:15 459947 --> Utf8 Class Initialized
INFO - 2019-01-07 11:50:15 461922 --> URI Class Initialized
INFO - 2019-01-07 11:50:15 466866 --> Router Class Initialized
INFO - 2019-01-07 11:50:15 469645 --> Output Class Initialized
INFO - 2019-01-07 11:50:15 471709 --> Security Class Initialized
DEBUG - 2019-01-07 11:50:15 473603 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:50:15 473733 --> Input Class Initialized
INFO - 2019-01-07 11:50:15 474457 --> Language Class Initialized
ERROR - 2019-01-07 11:50:15 475548 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 11:50:15 734781 --> Config Class Initialized
INFO - 2019-01-07 11:50:15 734874 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:50:15 736305 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:50:15 736402 --> Utf8 Class Initialized
INFO - 2019-01-07 11:50:15 737627 --> URI Class Initialized
INFO - 2019-01-07 11:50:15 742917 --> Router Class Initialized
INFO - 2019-01-07 11:50:15 746576 --> Output Class Initialized
INFO - 2019-01-07 11:50:15 748892 --> Security Class Initialized
DEBUG - 2019-01-07 11:50:15 750590 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:50:15 750664 --> Input Class Initialized
INFO - 2019-01-07 11:50:15 750988 --> Language Class Initialized
ERROR - 2019-01-07 11:50:15 751522 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 11:50:15 776818 --> Config Class Initialized
INFO - 2019-01-07 11:50:15 777296 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:50:15 780240 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:50:15 780313 --> Utf8 Class Initialized
INFO - 2019-01-07 11:50:15 781919 --> URI Class Initialized
INFO - 2019-01-07 11:50:15 788491 --> Router Class Initialized
INFO - 2019-01-07 11:50:15 791920 --> Output Class Initialized
INFO - 2019-01-07 11:50:15 793088 --> Security Class Initialized
DEBUG - 2019-01-07 11:50:15 794014 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:50:15 794087 --> Input Class Initialized
INFO - 2019-01-07 11:50:15 794433 --> Language Class Initialized
ERROR - 2019-01-07 11:50:15 794955 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 11:50:15 853396 --> Config Class Initialized
INFO - 2019-01-07 11:50:15 853545 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:50:15 855397 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:50:15 855485 --> Utf8 Class Initialized
INFO - 2019-01-07 11:50:15 856173 --> URI Class Initialized
INFO - 2019-01-07 11:50:15 857889 --> Router Class Initialized
INFO - 2019-01-07 11:50:15 859216 --> Output Class Initialized
INFO - 2019-01-07 11:50:15 860460 --> Security Class Initialized
DEBUG - 2019-01-07 11:50:15 861886 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:50:15 861985 --> Input Class Initialized
INFO - 2019-01-07 11:50:15 862530 --> Language Class Initialized
ERROR - 2019-01-07 11:50:15 863378 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 11:50:15 898217 --> Config Class Initialized
INFO - 2019-01-07 11:50:15 902820 --> Config Class Initialized
INFO - 2019-01-07 11:50:15 902910 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:50:15 904361 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:50:15 904468 --> Utf8 Class Initialized
INFO - 2019-01-07 11:50:15 905502 --> URI Class Initialized
INFO - 2019-01-07 11:50:15 908811 --> Router Class Initialized
INFO - 2019-01-07 11:50:15 910753 --> Output Class Initialized
INFO - 2019-01-07 11:50:15 911475 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:50:15 913434 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:50:15 913543 --> Utf8 Class Initialized
INFO - 2019-01-07 11:50:15 914670 --> URI Class Initialized
INFO - 2019-01-07 11:50:15 917468 --> Router Class Initialized
INFO - 2019-01-07 11:50:15 919162 --> Output Class Initialized
INFO - 2019-01-07 11:50:15 920718 --> Security Class Initialized
INFO - 2019-01-07 11:50:15 922141 --> Security Class Initialized
DEBUG - 2019-01-07 11:50:15 923414 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:50:15 923496 --> Input Class Initialized
INFO - 2019-01-07 11:50:15 923818 --> Language Class Initialized
ERROR - 2019-01-07 11:50:15 924597 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-07 11:50:15 926321 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:50:15 926402 --> Input Class Initialized
INFO - 2019-01-07 11:50:15 926728 --> Language Class Initialized
ERROR - 2019-01-07 11:50:15 927226 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-07 11:50:49 514157 --> Config Class Initialized
INFO - 2019-01-07 11:50:49 514467 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:50:49 516618 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:50:49 516736 --> Utf8 Class Initialized
INFO - 2019-01-07 11:50:49 518142 --> URI Class Initialized
INFO - 2019-01-07 11:50:49 521816 --> Router Class Initialized
INFO - 2019-01-07 11:50:49 524162 --> Output Class Initialized
INFO - 2019-01-07 11:50:49 525904 --> Security Class Initialized
DEBUG - 2019-01-07 11:50:49 527558 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:50:49 527671 --> Input Class Initialized
INFO - 2019-01-07 11:50:49 528207 --> Language Class Initialized
INFO - 2019-01-07 11:50:49 531574 --> Loader Class Initialized
INFO - 2019-01-07 11:50:49 532984 --> Helper loaded: url_helper
INFO - 2019-01-07 11:50:49 533776 --> Helper loaded: utility_helper
INFO - 2019-01-07 17:20:49 542779 --> Database Driver Class Initialized
INFO - 2019-01-07 17:20:49 551105 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 17:20:49 552386 --> Controller Class Initialized
INFO - 2019-01-07 17:20:49 553025 --> Parser Class Initialized
INFO - 2019-01-07 17:20:49 553961 --> Helper loaded: html_helper
INFO - 2019-01-07 17:20:49 556852 --> Model Class Initialized
INFO - 2019-01-07 17:20:49 602946 --> Model Class Initialized
DEBUG - 2019-01-07 17:20:49 611443 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-07 17:20:49 613007 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-07 17:20:49 636436 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-07 17:20:49 636601 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-07 17:20:49 638030 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 17:20:49 639705 --> Helper loaded: file_helper
DEBUG - 2019-01-07 17:20:49 639846 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 17:20:49 640856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 641648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 642842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 643614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 645442 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 646251 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 647386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 648093 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 648809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 649552 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 650233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 650993 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 651757 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 652472 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 653192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 653906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 654629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 655371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 656090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 656837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 657555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 658246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 658966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 659693 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-07 17:20:49 660558 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2019-01-07 17:20:49 660684 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2019-01-07 17:20:49 660778 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2019-01-07 17:20:49 663114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 666837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 668507 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:49 676975 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 17:20:49 678798 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 17:20:49 686552 --> Final output sent to browser
DEBUG - 2019-01-07 17:20:49 686664 --> Total execution time: 0.1670
INFO - 2019-01-07 11:50:50 481585 --> Config Class Initialized
INFO - 2019-01-07 11:50:50 481782 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:50:50 483777 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:50:50 483928 --> Utf8 Class Initialized
INFO - 2019-01-07 11:50:50 485150 --> URI Class Initialized
INFO - 2019-01-07 11:50:50 488070 --> Router Class Initialized
INFO - 2019-01-07 11:50:50 489538 --> Output Class Initialized
INFO - 2019-01-07 11:50:50 490689 --> Security Class Initialized
DEBUG - 2019-01-07 11:50:50 491713 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:50:50 491785 --> Input Class Initialized
INFO - 2019-01-07 11:50:50 492110 --> Language Class Initialized
INFO - 2019-01-07 11:50:50 497127 --> Loader Class Initialized
INFO - 2019-01-07 11:50:50 498548 --> Helper loaded: url_helper
INFO - 2019-01-07 11:50:50 499245 --> Helper loaded: utility_helper
INFO - 2019-01-07 17:20:50 506100 --> Database Driver Class Initialized
INFO - 2019-01-07 17:20:50 513215 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 17:20:50 514409 --> Controller Class Initialized
INFO - 2019-01-07 17:20:50 515274 --> Final output sent to browser
DEBUG - 2019-01-07 17:20:50 515342 --> Total execution time: 0.0359
INFO - 2019-01-07 11:50:53 882275 --> Config Class Initialized
INFO - 2019-01-07 11:50:53 882471 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:50:53 884382 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:50:53 884485 --> Utf8 Class Initialized
INFO - 2019-01-07 11:50:53 885960 --> URI Class Initialized
INFO - 2019-01-07 11:50:53 888159 --> Router Class Initialized
INFO - 2019-01-07 11:50:53 889539 --> Output Class Initialized
INFO - 2019-01-07 11:50:53 890572 --> Security Class Initialized
DEBUG - 2019-01-07 11:50:53 891522 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:50:53 891592 --> Input Class Initialized
INFO - 2019-01-07 11:50:53 891913 --> Language Class Initialized
INFO - 2019-01-07 11:50:53 893923 --> Loader Class Initialized
INFO - 2019-01-07 11:50:53 894793 --> Helper loaded: url_helper
INFO - 2019-01-07 11:50:53 895312 --> Helper loaded: utility_helper
INFO - 2019-01-07 17:20:53 900604 --> Database Driver Class Initialized
INFO - 2019-01-07 17:20:53 913980 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 17:20:53 914880 --> Controller Class Initialized
INFO - 2019-01-07 17:20:53 915271 --> Parser Class Initialized
INFO - 2019-01-07 17:20:53 915843 --> Helper loaded: html_helper
INFO - 2019-01-07 17:20:53 917568 --> Model Class Initialized
DEBUG - 2019-01-07 17:20:54 211168 --> listing_model: getSectorListTesting0120121: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 10]
DEBUG - 2019-01-07 17:20:54 217128 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 10]
INFO - 2019-01-07 17:20:54 218063 --> Model Class Initialized
DEBUG - 2019-01-07 17:20:54 218621 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-07 17:20:54 219779 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-07 17:20:54 232657 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-07 17:20:54 234707 --> Helper loaded: file_helper
DEBUG - 2019-01-07 17:20:54 234880 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-07 17:20:54 237919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 239356 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 248687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 249648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 250070 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 252937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 253700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 254079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 257107 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 257886 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 258268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 261130 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 261913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 262290 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 265151 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 265954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 266345 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 269241 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 270030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 270435 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 273394 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 274183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 274595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 277605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 278392 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 278796 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 281825 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 282640 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 283032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 286144 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 288013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 288415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 291507 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 293514 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 294326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 294759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 297915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 298674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 299848 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 300673 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 301110 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 304231 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 305073 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 306221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 307071 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 307548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 310651 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 311391 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 312505 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 313313 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 313801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 317173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 317919 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 319048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 319917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 320337 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 323501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 324239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 325345 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 326206 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 326664 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 329814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 330574 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 331728 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 332601 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 333019 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 336122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 336853 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 337970 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 338888 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 339313 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 342535 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 343244 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 344364 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 345218 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 345658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 348783 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 349495 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 350631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 351511 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 352936 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 361054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 361867 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 17:20:54 363030 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2019-01-07 17:20:54 366286 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 368184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 368638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-07 17:20:54 371716 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-07 17:20:54 372466 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-07 17:20:54 390283 --> Final output sent to browser
DEBUG - 2019-01-07 17:20:54 390424 --> Total execution time: 0.4925
INFO - 2019-01-07 11:50:54 775481 --> Config Class Initialized
INFO - 2019-01-07 11:50:54 775578 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:50:54 776803 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:50:54 776874 --> Utf8 Class Initialized
INFO - 2019-01-07 11:50:54 777592 --> URI Class Initialized
INFO - 2019-01-07 11:50:54 779093 --> Config Class Initialized
INFO - 2019-01-07 11:50:54 779268 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:50:54 780637 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:50:54 780708 --> Utf8 Class Initialized
INFO - 2019-01-07 11:50:54 781586 --> URI Class Initialized
INFO - 2019-01-07 11:50:54 784024 --> Router Class Initialized
INFO - 2019-01-07 11:50:54 786683 --> Config Class Initialized
INFO - 2019-01-07 11:50:54 786845 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:50:54 788153 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:50:54 788223 --> Utf8 Class Initialized
INFO - 2019-01-07 11:50:54 789077 --> URI Class Initialized
INFO - 2019-01-07 11:50:54 791490 --> Router Class Initialized
INFO - 2019-01-07 11:50:54 793520 --> Router Class Initialized
INFO - 2019-01-07 11:50:54 794888 --> Output Class Initialized
INFO - 2019-01-07 11:50:54 795957 --> Security Class Initialized
DEBUG - 2019-01-07 11:50:54 796884 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:50:54 796955 --> Input Class Initialized
INFO - 2019-01-07 11:50:54 797270 --> Language Class Initialized
ERROR - 2019-01-07 11:50:54 797805 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-07 11:50:54 799043 --> Output Class Initialized
INFO - 2019-01-07 11:50:54 800164 --> Security Class Initialized
DEBUG - 2019-01-07 11:50:54 801143 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:50:54 801213 --> Input Class Initialized
INFO - 2019-01-07 11:50:54 801552 --> Language Class Initialized
ERROR - 2019-01-07 11:50:54 802074 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-07 11:50:54 803798 --> Output Class Initialized
INFO - 2019-01-07 11:50:54 804872 --> Security Class Initialized
DEBUG - 2019-01-07 11:50:54 805836 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:50:54 805905 --> Input Class Initialized
INFO - 2019-01-07 11:50:54 806221 --> Language Class Initialized
ERROR - 2019-01-07 11:50:54 806749 --> 404 Page Not Found: Browse-sector-list/1
INFO - 2019-01-07 11:50:55 311589 --> Config Class Initialized
INFO - 2019-01-07 11:50:55 311692 --> Hooks Class Initialized
DEBUG - 2019-01-07 11:50:55 316581 --> UTF-8 Support Enabled
INFO - 2019-01-07 11:50:55 316765 --> Utf8 Class Initialized
INFO - 2019-01-07 11:50:55 319381 --> URI Class Initialized
INFO - 2019-01-07 11:50:55 321791 --> Router Class Initialized
INFO - 2019-01-07 11:50:55 324110 --> Output Class Initialized
INFO - 2019-01-07 11:50:55 325745 --> Security Class Initialized
DEBUG - 2019-01-07 11:50:55 327316 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-07 11:50:55 327405 --> Input Class Initialized
INFO - 2019-01-07 11:50:55 328041 --> Language Class Initialized
INFO - 2019-01-07 11:50:55 339888 --> Loader Class Initialized
INFO - 2019-01-07 11:50:55 345874 --> Helper loaded: url_helper
INFO - 2019-01-07 11:50:55 348210 --> Helper loaded: utility_helper
INFO - 2019-01-07 17:20:55 360317 --> Database Driver Class Initialized
INFO - 2019-01-07 17:20:55 364989 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-07 17:20:55 366480 --> Controller Class Initialized
INFO - 2019-01-07 17:20:55 367444 --> Final output sent to browser
DEBUG - 2019-01-07 17:20:55 367518 --> Total execution time: 0.0578
