<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2019-01-06 01:00:33 879141 --> Database Driver Class Initialized
INFO - 2019-01-06 01:00:33 918307 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-06 01:00:33 941132 --> Controller Class Initialized
INFO - 2019-01-06 01:00:33 945363 --> Parser Class Initialized
INFO - 2019-01-06 01:00:33 954106 --> Helper loaded: html_helper
INFO - 2019-01-06 01:00:33 969513 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-06 01:00:34 002845 --> Model Class Initialized
DEBUG - 2019-01-06 01:00:34 029268 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-06 01:00:34 035825 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-06'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-06 01:00:34 036602 --> Model Class Initialized
DEBUG - 2019-01-06 01:00:34 038038 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-06 01:00:34 095014 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-06 01:00:34 115498 --> Helper loaded: file_helper
DEBUG - 2019-01-06 01:00:34 118640 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-06 01:00:34 141671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 153090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 211348 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 223689 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 227195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 227627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 228276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 229054 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 232197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 232594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 233217 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 233891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 236495 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 236828 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 237447 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 238312 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 240750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 241149 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 241780 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 242556 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 245733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 246160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 246978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 247709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 250669 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 251019 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 251600 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 252343 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 255662 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 255997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 256706 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 257496 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 260138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 260510 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 261327 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 262202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 266037 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 266460 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 267416 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 268167 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 270319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 270777 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 271610 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 272509 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 276480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 276973 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 277822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 278660 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 282191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 282567 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 283544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 284516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 287833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 288239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 288906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 289794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 292771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 293160 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 294040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 295418 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 298852 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 299453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 300371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 301482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 305524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 306194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 306983 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 308238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 311162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 311585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 312302 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 313221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 314091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 314961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 315947 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 316648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 317301 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 318131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 318821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 319686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 320245 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 320823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 321707 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 323065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 323817 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 324379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 324990 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 326467 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 327862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 329303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 330338 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 331727 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 332959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 336730 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 337168 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 337918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 338984 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 342614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 343045 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 344142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 346795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 350279 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 350733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 351624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 352487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 355298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 355750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 356530 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 357291 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 360191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 360626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 361371 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 362138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 365731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 366169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 367063 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 369777 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 370676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 373934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 374842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 377105 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 377867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 380094 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 380846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 383066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 383797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 386058 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-06 01:00:34 386816 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-06 01:00:34 395791 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 397941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 398407 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:34 401325 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-06 01:00:34 402076 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-06 01:00:34 412251 --> Final output sent to browser
DEBUG - 2019-01-06 01:00:34 412444 --> Total execution time: 0.9539
INFO - 2019-01-06 01:00:36 272634 --> Database Driver Class Initialized
INFO - 2019-01-06 01:00:36 279470 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-06 01:00:36 280296 --> Controller Class Initialized
INFO - 2019-01-06 01:00:36 281653 --> Final output sent to browser
DEBUG - 2019-01-06 01:00:36 281724 --> Total execution time: 0.0916
INFO - 2019-01-06 01:00:42 276700 --> Database Driver Class Initialized
INFO - 2019-01-06 01:00:42 286541 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-06 01:00:42 288074 --> Controller Class Initialized
INFO - 2019-01-06 01:00:42 288824 --> Parser Class Initialized
INFO - 2019-01-06 01:00:42 289974 --> Helper loaded: html_helper
INFO - 2019-01-06 01:00:42 293376 --> Model Class Initialized
INFO - 2019-01-06 01:00:42 327563 --> Model Class Initialized
DEBUG - 2019-01-06 01:00:42 330280 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-06 01:00:42 332068 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-06 01:00:42 339996 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-06 01:00:42 340190 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-06 01:00:42 342546 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-06 01:00:42 345855 --> Helper loaded: file_helper
DEBUG - 2019-01-06 01:00:42 346044 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-06 01:00:42 347067 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 347801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 348541 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 349267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 349987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 350759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 351500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 352227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 352952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 355474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 356102 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 356683 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 357242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 357806 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 358366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 358953 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 359514 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 360066 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 360625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 361172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 361730 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 362278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 362844 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 363430 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-06 01:00:42 364121 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2019-01-06 01:00:42 364238 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2019-01-06 01:00:42 364319 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2019-01-06 01:00:42 366283 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 369693 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 371222 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:42 378442 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-06 01:00:42 379890 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-06 01:00:42 387236 --> Final output sent to browser
DEBUG - 2019-01-06 01:00:42 387331 --> Total execution time: 0.1390
INFO - 2019-01-06 01:00:43 167572 --> Database Driver Class Initialized
INFO - 2019-01-06 01:00:43 176891 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-06 01:00:43 178359 --> Controller Class Initialized
INFO - 2019-01-06 01:00:43 179361 --> Final output sent to browser
DEBUG - 2019-01-06 01:00:43 179940 --> Total execution time: 0.0625
INFO - 2019-01-06 01:00:44 570086 --> Database Driver Class Initialized
INFO - 2019-01-06 01:00:44 575743 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-06 01:00:44 576617 --> Controller Class Initialized
INFO - 2019-01-06 01:00:44 577022 --> Parser Class Initialized
INFO - 2019-01-06 01:00:44 577625 --> Helper loaded: html_helper
INFO - 2019-01-06 01:00:44 579442 --> Model Class Initialized
DEBUG - 2019-01-06 01:00:44 594558 --> listing_model: getSectorListTesting0120121: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
DEBUG - 2019-01-06 01:00:44 604319 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
INFO - 2019-01-06 01:00:44 605006 --> Model Class Initialized
DEBUG - 2019-01-06 01:00:44 605755 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-06 01:00:44 606928 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-06 01:00:44 616012 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-06 01:00:44 617942 --> Helper loaded: file_helper
DEBUG - 2019-01-06 01:00:44 618134 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-06 01:00:44 621200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 622889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 633380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 634217 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 634632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 637269 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 637965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 638319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 640912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 641618 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 641972 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 644638 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 645340 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 645718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 648380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 650089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 650446 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 653024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 655122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 655874 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 656240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 658977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 660126 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 661108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 661812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 662183 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 664958 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 665839 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 666837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 667604 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 667989 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 670878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 671787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 672851 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 673578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 673949 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 676898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 677814 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 678843 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 679588 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 679975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 683696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 684514 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-06 01:00:44 685544 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2019-01-06 01:00:44 688174 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 690021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 690417 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 01:00:44 693228 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-06 01:00:44 693905 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-06 01:00:44 703439 --> Final output sent to browser
DEBUG - 2019-01-06 01:00:44 703574 --> Total execution time: 0.1448
INFO - 2019-01-06 01:00:46 101466 --> Database Driver Class Initialized
INFO - 2019-01-06 01:00:46 108815 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-06 01:00:46 109630 --> Controller Class Initialized
INFO - 2019-01-06 01:00:46 110209 --> Final output sent to browser
DEBUG - 2019-01-06 01:00:46 110276 --> Total execution time: 0.0436
INFO - 2019-01-06 12:37:28 833657 --> Config Class Initialized
INFO - 2019-01-06 12:37:28 845640 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:37:28 881938 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:37:28 885773 --> Utf8 Class Initialized
INFO - 2019-01-06 12:37:28 887975 --> URI Class Initialized
DEBUG - 2019-01-06 12:37:28 938308 --> No URI present. Default controller set.
INFO - 2019-01-06 12:37:28 943559 --> Router Class Initialized
INFO - 2019-01-06 12:37:28 974457 --> Output Class Initialized
INFO - 2019-01-06 12:37:29 006943 --> Security Class Initialized
DEBUG - 2019-01-06 12:37:29 021737 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:37:29 033577 --> Input Class Initialized
INFO - 2019-01-06 12:37:29 034398 --> Language Class Initialized
INFO - 2019-01-06 12:37:29 095415 --> Loader Class Initialized
INFO - 2019-01-06 12:37:29 113955 --> Helper loaded: url_helper
INFO - 2019-01-06 12:37:29 132738 --> Helper loaded: utility_helper
INFO - 2019-01-06 18:07:29 277765 --> Database Driver Class Initialized
INFO - 2019-01-06 18:07:29 505364 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-06 18:07:29 616043 --> Controller Class Initialized
INFO - 2019-01-06 18:07:29 627183 --> Parser Class Initialized
INFO - 2019-01-06 18:07:29 628717 --> Helper loaded: html_helper
INFO - 2019-01-06 18:07:29 657581 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-06 18:07:29 690205 --> Model Class Initialized
DEBUG - 2019-01-06 18:07:29 728307 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-06 18:07:29 733068 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-06'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-06 18:07:29 734054 --> Model Class Initialized
DEBUG - 2019-01-06 18:07:29 738142 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-06 18:07:29 809735 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-06 18:07:29 826946 --> Helper loaded: file_helper
DEBUG - 2019-01-06 18:07:29 830625 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-06 18:07:30 004142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 156966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 238351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 245954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 248971 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 249393 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 250806 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 252007 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 256186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 256694 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 257359 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 258816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 263308 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 263712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 264367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 265446 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 268198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 268623 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 269300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 270267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 272984 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 273386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 274089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 275021 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 278234 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 278659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 279448 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 280474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 283298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 283710 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 284409 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 285980 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 294197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 294986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 295804 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 296977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 301865 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 302607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 303487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 304642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 309601 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 310055 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 310883 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 311944 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 315963 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 316833 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 318794 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 320754 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 332307 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 333496 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 335412 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 337363 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 348648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 349873 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 352613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 354324 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 365957 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 367238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 369801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 371685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 376249 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 376729 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 377604 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 378657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 382153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 382859 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 384115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 385135 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 388263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 388725 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 389569 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 390469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 391244 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 392019 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 392780 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 393517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 394263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 395065 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 395889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 396670 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 397430 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 398188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 398940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 399691 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 400434 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 401181 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 401973 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 402925 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 403748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 404561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 405349 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 406172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 407073 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 410434 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 410887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 411777 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 412714 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 415935 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 416383 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 417284 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 419428 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 422640 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 423078 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 424009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 424959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 428200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 428680 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 429575 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 430524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 433718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 434159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 435045 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 435976 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 439863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 440608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 442540 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 451246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 452637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 455281 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 457063 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 459602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 460813 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 463629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 464709 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 467108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 468097 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 470467 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-06 18:07:30 471563 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-06 18:07:30 486536 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 488549 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 488965 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 492084 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-06 18:07:30 492837 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-06 18:07:30 504525 --> Final output sent to browser
DEBUG - 2019-01-06 18:07:30 504789 --> Total execution time: 1.6832
INFO - 2019-01-06 12:37:30 628766 --> Config Class Initialized
INFO - 2019-01-06 12:37:30 628865 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:37:30 630182 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:37:30 630261 --> Utf8 Class Initialized
INFO - 2019-01-06 12:37:30 631035 --> URI Class Initialized
DEBUG - 2019-01-06 12:37:30 632380 --> No URI present. Default controller set.
INFO - 2019-01-06 12:37:30 632467 --> Router Class Initialized
INFO - 2019-01-06 12:37:30 633915 --> Output Class Initialized
INFO - 2019-01-06 12:37:30 635102 --> Security Class Initialized
DEBUG - 2019-01-06 12:37:30 636243 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:37:30 636322 --> Input Class Initialized
INFO - 2019-01-06 12:37:30 636687 --> Language Class Initialized
INFO - 2019-01-06 12:37:30 638876 --> Loader Class Initialized
INFO - 2019-01-06 12:37:30 639767 --> Helper loaded: url_helper
INFO - 2019-01-06 12:37:30 640240 --> Helper loaded: utility_helper
INFO - 2019-01-06 18:07:30 646083 --> Database Driver Class Initialized
INFO - 2019-01-06 18:07:30 696302 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-06 18:07:30 707901 --> Controller Class Initialized
INFO - 2019-01-06 18:07:30 709254 --> Parser Class Initialized
INFO - 2019-01-06 18:07:30 711064 --> Helper loaded: html_helper
INFO - 2019-01-06 18:07:30 712836 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-06 18:07:30 715804 --> Model Class Initialized
DEBUG - 2019-01-06 18:07:30 726555 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-06 18:07:30 734623 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-06'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-06 18:07:30 735347 --> Model Class Initialized
DEBUG - 2019-01-06 18:07:30 736190 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-06 18:07:30 740266 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-06 18:07:30 742055 --> Helper loaded: file_helper
DEBUG - 2019-01-06 18:07:30 742232 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-06 18:07:30 744259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 744656 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 748011 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 748759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 751548 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 751946 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 752651 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 753842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 756676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 757085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 757803 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 758774 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 761663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 762079 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 762876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 763876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 766913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 767348 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 768104 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 769198 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 772219 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 772682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 773416 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 774554 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 777610 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 778038 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 778801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 779858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 782922 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 783341 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 784106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 875305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 879374 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 879926 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 881032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 881931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 885469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 885900 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 886847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 887515 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 889492 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 889771 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 890290 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 890927 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 893062 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 893351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 893992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 894613 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 896603 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 896886 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 897526 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 898163 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 900240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 900546 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 901077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 901784 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 903791 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 904076 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 904629 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 905246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 907351 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 907663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 908456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 909085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 911318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 911626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 912166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 912821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 915482 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 915941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 917227 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 917895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 918466 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 919022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 919603 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 920151 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 920797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 921503 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 922195 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 922908 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 923645 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 924431 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 925246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 925815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 926357 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 927242 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 928535 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 931015 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 933276 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 935456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 937716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 938323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 939116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 941720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 942163 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 942847 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 943627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 945828 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 946129 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 947331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 948273 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 950381 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 950689 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 951253 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 952259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 954561 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 954862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 955452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 956151 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 958352 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 958821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 959846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 961373 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 963428 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 963737 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 964344 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 966404 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 967298 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 969321 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 970077 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 972184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 972856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 975048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 975681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 977763 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 978398 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 980951 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-06 18:07:30 981662 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-06 18:07:30 983552 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 985323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 985644 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:30 987768 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-06 18:07:30 988249 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-06 18:07:30 996254 --> Final output sent to browser
DEBUG - 2019-01-06 18:07:30 996346 --> Total execution time: 0.3615
INFO - 2019-01-06 12:37:34 385370 --> Config Class Initialized
INFO - 2019-01-06 12:37:34 385754 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:37:34 388231 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:37:34 388362 --> Utf8 Class Initialized
INFO - 2019-01-06 12:37:34 390042 --> URI Class Initialized
INFO - 2019-01-06 12:37:34 396914 --> Router Class Initialized
INFO - 2019-01-06 12:37:34 401576 --> Output Class Initialized
INFO - 2019-01-06 12:37:34 404618 --> Security Class Initialized
DEBUG - 2019-01-06 12:37:34 407105 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:37:34 407237 --> Input Class Initialized
INFO - 2019-01-06 12:37:34 408591 --> Language Class Initialized
ERROR - 2019-01-06 12:37:34 411168 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-06 12:37:34 526480 --> Config Class Initialized
INFO - 2019-01-06 12:37:34 526657 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:37:34 527828 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:37:34 527890 --> Utf8 Class Initialized
INFO - 2019-01-06 12:37:34 528676 --> URI Class Initialized
INFO - 2019-01-06 12:37:34 530802 --> Router Class Initialized
INFO - 2019-01-06 12:37:34 532088 --> Output Class Initialized
INFO - 2019-01-06 12:37:34 533050 --> Security Class Initialized
DEBUG - 2019-01-06 12:37:34 534019 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:37:34 534081 --> Input Class Initialized
INFO - 2019-01-06 12:37:34 534404 --> Language Class Initialized
ERROR - 2019-01-06 12:37:34 534883 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-06 12:37:34 680052 --> Config Class Initialized
INFO - 2019-01-06 12:37:34 680382 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:37:34 682838 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:37:34 682970 --> Utf8 Class Initialized
INFO - 2019-01-06 12:37:34 684609 --> URI Class Initialized
INFO - 2019-01-06 12:37:34 689136 --> Router Class Initialized
INFO - 2019-01-06 12:37:34 691803 --> Output Class Initialized
INFO - 2019-01-06 12:37:34 693804 --> Security Class Initialized
DEBUG - 2019-01-06 12:37:34 695810 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:37:34 695938 --> Input Class Initialized
INFO - 2019-01-06 12:37:34 696574 --> Language Class Initialized
ERROR - 2019-01-06 12:37:34 697549 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-06 12:37:34 752324 --> Config Class Initialized
INFO - 2019-01-06 12:37:34 752751 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:37:34 755950 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:37:34 756067 --> Utf8 Class Initialized
INFO - 2019-01-06 12:37:34 757602 --> URI Class Initialized
INFO - 2019-01-06 12:37:34 761010 --> Router Class Initialized
INFO - 2019-01-06 12:37:34 765091 --> Output Class Initialized
INFO - 2019-01-06 12:37:34 767031 --> Security Class Initialized
DEBUG - 2019-01-06 12:37:34 770931 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:37:34 771095 --> Input Class Initialized
INFO - 2019-01-06 12:37:34 771975 --> Language Class Initialized
INFO - 2019-01-06 12:37:34 792853 --> Loader Class Initialized
INFO - 2019-01-06 12:37:34 794404 --> Helper loaded: url_helper
INFO - 2019-01-06 12:37:34 795622 --> Helper loaded: utility_helper
INFO - 2019-01-06 12:37:34 814848 --> Config Class Initialized
INFO - 2019-01-06 12:37:34 815259 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:37:34 819653 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:37:34 819859 --> Utf8 Class Initialized
INFO - 2019-01-06 18:07:34 830604 --> Database Driver Class Initialized
INFO - 2019-01-06 12:37:34 831448 --> URI Class Initialized
INFO - 2019-01-06 12:37:34 841692 --> Router Class Initialized
INFO - 2019-01-06 12:37:34 844214 --> Output Class Initialized
INFO - 2019-01-06 12:37:34 846508 --> Security Class Initialized
INFO - 2019-01-06 18:07:34 854094 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-06 18:07:34 856180 --> Controller Class Initialized
INFO - 2019-01-06 18:07:34 857511 --> Final output sent to browser
DEBUG - 2019-01-06 18:07:34 857666 --> Total execution time: 0.1079
DEBUG - 2019-01-06 12:37:34 861618 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:37:34 861737 --> Input Class Initialized
INFO - 2019-01-06 12:37:34 862318 --> Language Class Initialized
ERROR - 2019-01-06 12:37:34 863187 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-06 12:37:35 083947 --> Config Class Initialized
INFO - 2019-01-06 12:37:35 084103 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:37:35 086179 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:37:35 086306 --> Utf8 Class Initialized
INFO - 2019-01-06 12:37:35 090015 --> Config Class Initialized
INFO - 2019-01-06 12:37:35 090127 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:37:35 091762 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:37:35 091861 --> Utf8 Class Initialized
INFO - 2019-01-06 12:37:35 092829 --> URI Class Initialized
INFO - 2019-01-06 12:37:35 094629 --> URI Class Initialized
INFO - 2019-01-06 12:37:35 097783 --> Router Class Initialized
INFO - 2019-01-06 12:37:36 911278 --> Output Class Initialized
INFO - 2019-01-06 12:37:36 913675 --> Security Class Initialized
DEBUG - 2019-01-06 12:37:36 915693 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:37:36 915834 --> Input Class Initialized
INFO - 2019-01-06 12:37:36 918376 --> Config Class Initialized
INFO - 2019-01-06 12:37:36 918546 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:37:36 921226 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:37:36 921360 --> Utf8 Class Initialized
INFO - 2019-01-06 12:37:36 922537 --> Router Class Initialized
INFO - 2019-01-06 12:37:36 925880 --> Output Class Initialized
INFO - 2019-01-06 12:37:36 928177 --> Security Class Initialized
INFO - 2019-01-06 12:37:36 929575 --> Language Class Initialized
ERROR - 2019-01-06 12:37:36 930690 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-06 12:37:36 932964 --> URI Class Initialized
INFO - 2019-01-06 12:37:36 937325 --> Router Class Initialized
DEBUG - 2019-01-06 12:37:36 940413 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:37:36 940568 --> Input Class Initialized
INFO - 2019-01-06 12:37:36 941179 --> Language Class Initialized
ERROR - 2019-01-06 12:37:36 942208 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-06 12:37:36 945287 --> Output Class Initialized
INFO - 2019-01-06 12:37:36 949728 --> Security Class Initialized
DEBUG - 2019-01-06 12:37:36 954113 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:37:36 954303 --> Input Class Initialized
INFO - 2019-01-06 12:37:36 955570 --> Language Class Initialized
ERROR - 2019-01-06 12:37:36 957679 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-06 12:37:42 901725 --> Config Class Initialized
INFO - 2019-01-06 12:37:42 902079 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:37:42 904972 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:37:42 905082 --> Utf8 Class Initialized
INFO - 2019-01-06 12:37:42 906477 --> URI Class Initialized
INFO - 2019-01-06 12:37:42 910439 --> Router Class Initialized
INFO - 2019-01-06 12:37:42 913100 --> Output Class Initialized
INFO - 2019-01-06 12:37:42 915182 --> Security Class Initialized
DEBUG - 2019-01-06 12:37:42 917094 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:37:42 917205 --> Input Class Initialized
INFO - 2019-01-06 12:37:42 917757 --> Language Class Initialized
ERROR - 2019-01-06 12:37:42 918922 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-06 12:37:51 675653 --> Config Class Initialized
INFO - 2019-01-06 12:37:51 676018 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:37:51 678457 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:37:51 678596 --> Utf8 Class Initialized
INFO - 2019-01-06 12:37:51 680094 --> URI Class Initialized
DEBUG - 2019-01-06 12:37:51 682497 --> No URI present. Default controller set.
INFO - 2019-01-06 12:37:51 682626 --> Router Class Initialized
INFO - 2019-01-06 12:37:51 685173 --> Output Class Initialized
INFO - 2019-01-06 12:37:51 687139 --> Security Class Initialized
DEBUG - 2019-01-06 12:37:51 689172 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:37:51 689301 --> Input Class Initialized
INFO - 2019-01-06 12:37:51 689928 --> Language Class Initialized
INFO - 2019-01-06 12:37:51 693928 --> Loader Class Initialized
INFO - 2019-01-06 12:37:51 695557 --> Helper loaded: url_helper
INFO - 2019-01-06 12:37:51 696365 --> Helper loaded: utility_helper
INFO - 2019-01-06 18:07:51 706656 --> Database Driver Class Initialized
INFO - 2019-01-06 18:07:51 714878 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-06 18:07:51 716337 --> Controller Class Initialized
INFO - 2019-01-06 18:07:51 717077 --> Parser Class Initialized
INFO - 2019-01-06 18:07:51 718148 --> Helper loaded: html_helper
INFO - 2019-01-06 18:07:51 719285 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-06 18:07:51 722559 --> Model Class Initialized
DEBUG - 2019-01-06 18:07:51 734819 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-06 18:07:51 739195 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-06'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-06 18:07:51 739942 --> Model Class Initialized
DEBUG - 2019-01-06 18:07:51 740509 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-06 18:07:51 746407 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-06 18:07:51 748442 --> Helper loaded: file_helper
DEBUG - 2019-01-06 18:07:51 748626 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-06 18:07:51 752820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 754893 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 764224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 766237 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 769187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 769678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 770396 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 771477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 776566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 777323 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 778125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 779072 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 782018 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 782422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 783158 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 784182 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 787200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 787657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 788379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 789398 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 799366 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 800837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 803648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 804692 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 808084 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 808543 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 809274 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 810306 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 813302 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 813747 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 814501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 815246 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 818422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 819139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 819921 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 820733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 823755 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 824171 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 824949 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 825795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 828867 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 829287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 830090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 830929 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 834083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 834532 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 835328 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 836105 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 839184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 839634 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 840460 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 841409 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 844527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 844954 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 845781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 846529 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 849668 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 850100 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 850934 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 851708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 854835 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 855273 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 856112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 857013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 862551 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 862987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 863836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 864716 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 867887 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 868328 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 869184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 870006 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 870733 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 871448 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 872190 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 872910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 873639 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 874336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 875049 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 876125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 877116 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 878032 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 878967 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 880016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 881014 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 881992 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 882996 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 884608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 885621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 886440 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 887247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 888086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 888904 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 892210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 892663 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 893542 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 894365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 897605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 898057 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 898941 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 899796 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 902930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 903358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 904233 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 905033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 908296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 908776 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 909683 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 910511 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 913676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 914117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 914998 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 916172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 919357 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 919816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 920788 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 923959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 925358 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 928608 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 929491 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 932594 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 933841 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 939517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 940532 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 943665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 944654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 947757 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-06 18:07:51 948755 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-06 18:07:51 951607 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 953514 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 953944 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:07:51 957076 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-06 18:07:51 957844 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-06 18:07:51 967030 --> Final output sent to browser
DEBUG - 2019-01-06 18:07:51 967170 --> Total execution time: 0.2855
INFO - 2019-01-06 12:37:53 031383 --> Config Class Initialized
INFO - 2019-01-06 12:37:53 031524 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:37:53 033193 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:37:53 033293 --> Utf8 Class Initialized
INFO - 2019-01-06 12:37:53 034307 --> URI Class Initialized
INFO - 2019-01-06 12:37:53 036290 --> Router Class Initialized
INFO - 2019-01-06 12:37:53 038095 --> Output Class Initialized
INFO - 2019-01-06 12:37:53 039490 --> Security Class Initialized
DEBUG - 2019-01-06 12:37:53 040873 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:37:53 040972 --> Input Class Initialized
INFO - 2019-01-06 12:37:53 041414 --> Language Class Initialized
INFO - 2019-01-06 12:37:53 046704 --> Loader Class Initialized
INFO - 2019-01-06 12:37:53 047785 --> Helper loaded: url_helper
INFO - 2019-01-06 12:37:53 048346 --> Helper loaded: utility_helper
INFO - 2019-01-06 18:07:53 055500 --> Database Driver Class Initialized
INFO - 2019-01-06 18:07:53 059658 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-06 18:07:53 060688 --> Controller Class Initialized
INFO - 2019-01-06 18:07:53 061450 --> Final output sent to browser
DEBUG - 2019-01-06 18:07:53 061547 --> Total execution time: 0.0314
INFO - 2019-01-06 12:37:54 147213 --> Config Class Initialized
INFO - 2019-01-06 12:37:54 147516 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:37:54 149631 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:37:54 149740 --> Utf8 Class Initialized
INFO - 2019-01-06 12:37:54 151493 --> URI Class Initialized
INFO - 2019-01-06 12:37:54 156070 --> Router Class Initialized
INFO - 2019-01-06 12:37:54 159926 --> Output Class Initialized
INFO - 2019-01-06 12:37:54 162816 --> Security Class Initialized
DEBUG - 2019-01-06 12:37:54 166161 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:37:54 166271 --> Input Class Initialized
INFO - 2019-01-06 12:37:54 166826 --> Language Class Initialized
ERROR - 2019-01-06 12:37:54 167710 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-06 12:37:54 245296 --> Config Class Initialized
INFO - 2019-01-06 12:37:54 245598 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:37:54 247621 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:37:54 247729 --> Utf8 Class Initialized
INFO - 2019-01-06 12:37:54 249097 --> URI Class Initialized
INFO - 2019-01-06 12:37:54 253007 --> Router Class Initialized
INFO - 2019-01-06 12:37:54 255649 --> Output Class Initialized
INFO - 2019-01-06 12:37:54 257375 --> Security Class Initialized
DEBUG - 2019-01-06 12:37:54 259270 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:37:54 259380 --> Input Class Initialized
INFO - 2019-01-06 12:37:54 259984 --> Language Class Initialized
ERROR - 2019-01-06 12:37:54 260816 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-06 12:37:54 282443 --> Config Class Initialized
INFO - 2019-01-06 12:37:54 282614 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:37:54 284754 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:37:54 284885 --> Utf8 Class Initialized
INFO - 2019-01-06 12:37:54 286187 --> URI Class Initialized
INFO - 2019-01-06 12:37:54 293015 --> Config Class Initialized
INFO - 2019-01-06 12:37:54 293158 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:37:54 295327 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:37:54 295476 --> Utf8 Class Initialized
INFO - 2019-01-06 12:37:54 296766 --> URI Class Initialized
INFO - 2019-01-06 12:37:54 300343 --> Router Class Initialized
INFO - 2019-01-06 12:37:54 303706 --> Output Class Initialized
INFO - 2019-01-06 12:37:54 307015 --> Router Class Initialized
INFO - 2019-01-06 12:37:54 309550 --> Output Class Initialized
INFO - 2019-01-06 12:37:54 311496 --> Security Class Initialized
DEBUG - 2019-01-06 12:37:54 313497 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:37:54 313632 --> Input Class Initialized
INFO - 2019-01-06 12:37:54 314239 --> Language Class Initialized
ERROR - 2019-01-06 12:37:54 315222 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-06 12:37:54 318353 --> Security Class Initialized
DEBUG - 2019-01-06 12:37:54 320286 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:37:54 320417 --> Input Class Initialized
INFO - 2019-01-06 12:37:54 321028 --> Language Class Initialized
ERROR - 2019-01-06 12:37:54 321979 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-06 12:37:54 358613 --> Config Class Initialized
INFO - 2019-01-06 12:37:54 358756 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:37:54 360691 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:37:54 360807 --> Utf8 Class Initialized
INFO - 2019-01-06 12:37:54 361922 --> URI Class Initialized
INFO - 2019-01-06 12:37:54 366955 --> Config Class Initialized
INFO - 2019-01-06 12:37:54 367229 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:37:54 369371 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:37:54 369503 --> Utf8 Class Initialized
INFO - 2019-01-06 12:37:54 379349 --> Router Class Initialized
INFO - 2019-01-06 12:37:54 381468 --> Output Class Initialized
INFO - 2019-01-06 12:37:54 383064 --> Security Class Initialized
INFO - 2019-01-06 12:37:54 384954 --> URI Class Initialized
INFO - 2019-01-06 12:37:54 388916 --> Router Class Initialized
INFO - 2019-01-06 12:37:54 391225 --> Output Class Initialized
INFO - 2019-01-06 12:37:54 394117 --> Config Class Initialized
INFO - 2019-01-06 12:37:54 394392 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:37:54 396569 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:37:54 396682 --> Utf8 Class Initialized
INFO - 2019-01-06 12:37:54 398097 --> URI Class Initialized
DEBUG - 2019-01-06 12:37:54 398706 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:37:54 398818 --> Input Class Initialized
INFO - 2019-01-06 12:37:54 399316 --> Language Class Initialized
ERROR - 2019-01-06 12:37:54 400130 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-06 12:37:54 403580 --> Security Class Initialized
DEBUG - 2019-01-06 12:37:54 405343 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:37:54 405476 --> Input Class Initialized
INFO - 2019-01-06 12:37:54 406032 --> Language Class Initialized
ERROR - 2019-01-06 12:37:54 406903 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-06 12:37:54 412384 --> Router Class Initialized
INFO - 2019-01-06 12:37:54 414714 --> Output Class Initialized
INFO - 2019-01-06 12:37:54 416486 --> Security Class Initialized
DEBUG - 2019-01-06 12:37:54 418222 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:37:54 418335 --> Input Class Initialized
INFO - 2019-01-06 12:37:54 418911 --> Language Class Initialized
ERROR - 2019-01-06 12:37:54 419823 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-06 12:37:56 005137 --> Config Class Initialized
INFO - 2019-01-06 12:37:56 005300 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:37:56 007385 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:37:56 007534 --> Utf8 Class Initialized
INFO - 2019-01-06 12:37:56 008800 --> URI Class Initialized
INFO - 2019-01-06 12:37:56 011869 --> Router Class Initialized
INFO - 2019-01-06 12:37:56 014272 --> Output Class Initialized
INFO - 2019-01-06 12:37:56 016180 --> Security Class Initialized
DEBUG - 2019-01-06 12:37:56 018029 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:37:56 018160 --> Input Class Initialized
INFO - 2019-01-06 12:37:56 018743 --> Language Class Initialized
ERROR - 2019-01-06 12:37:56 019651 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-06 12:38:30 136606 --> Config Class Initialized
INFO - 2019-01-06 12:38:30 136960 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:38:30 139694 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:38:30 139837 --> Utf8 Class Initialized
INFO - 2019-01-06 12:38:30 141591 --> URI Class Initialized
INFO - 2019-01-06 12:38:30 146107 --> Router Class Initialized
INFO - 2019-01-06 12:38:30 151089 --> Output Class Initialized
INFO - 2019-01-06 12:38:30 153431 --> Security Class Initialized
DEBUG - 2019-01-06 12:38:30 155706 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:38:30 155848 --> Input Class Initialized
INFO - 2019-01-06 12:38:30 156550 --> Language Class Initialized
INFO - 2019-01-06 12:38:30 160701 --> Loader Class Initialized
INFO - 2019-01-06 12:38:30 162405 --> Helper loaded: url_helper
INFO - 2019-01-06 12:38:30 163312 --> Helper loaded: utility_helper
INFO - 2019-01-06 18:08:30 174351 --> Database Driver Class Initialized
INFO - 2019-01-06 18:08:30 182892 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-06 18:08:30 184442 --> Controller Class Initialized
INFO - 2019-01-06 18:08:30 185228 --> Parser Class Initialized
INFO - 2019-01-06 18:08:30 186340 --> Helper loaded: html_helper
INFO - 2019-01-06 18:08:30 189737 --> Model Class Initialized
INFO - 2019-01-06 18:08:30 235424 --> Model Class Initialized
DEBUG - 2019-01-06 18:08:30 238950 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-06 18:08:30 241132 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-06 18:08:30 247812 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-06 18:08:30 248008 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-06 18:08:30 249862 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-06 18:08:30 251955 --> Helper loaded: file_helper
DEBUG - 2019-01-06 18:08:30 252137 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-06 18:08:30 253268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 254117 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 254925 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 255708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 256484 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 257240 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 258035 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 258800 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 259571 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 260318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 261030 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 261795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 262567 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 263302 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 263979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 264616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 265377 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 266041 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 266688 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 267313 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 267950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 268640 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 269268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 269918 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-06 18:08:30 270710 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2019-01-06 18:08:30 270864 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2019-01-06 18:08:30 270981 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2019-01-06 18:08:30 273798 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 278052 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 279762 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:30 289552 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-06 18:08:30 291482 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-06 18:08:30 299662 --> Final output sent to browser
DEBUG - 2019-01-06 18:08:30 299808 --> Total execution time: 0.1577
INFO - 2019-01-06 12:38:31 079838 --> Config Class Initialized
INFO - 2019-01-06 12:38:31 080065 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:38:31 081690 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:38:31 081777 --> Utf8 Class Initialized
INFO - 2019-01-06 12:38:31 082848 --> URI Class Initialized
INFO - 2019-01-06 12:38:31 085143 --> Router Class Initialized
INFO - 2019-01-06 12:38:31 086956 --> Output Class Initialized
INFO - 2019-01-06 12:38:31 088207 --> Security Class Initialized
DEBUG - 2019-01-06 12:38:31 089497 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:38:31 089585 --> Input Class Initialized
INFO - 2019-01-06 12:38:31 089987 --> Language Class Initialized
INFO - 2019-01-06 12:38:31 095298 --> Loader Class Initialized
INFO - 2019-01-06 12:38:31 096338 --> Helper loaded: url_helper
INFO - 2019-01-06 12:38:31 096884 --> Helper loaded: utility_helper
INFO - 2019-01-06 18:08:31 104871 --> Database Driver Class Initialized
INFO - 2019-01-06 18:08:31 241543 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-06 18:08:31 243089 --> Controller Class Initialized
INFO - 2019-01-06 18:08:31 244172 --> Final output sent to browser
DEBUG - 2019-01-06 18:08:31 244321 --> Total execution time: 0.1655
INFO - 2019-01-06 12:38:33 385098 --> Config Class Initialized
INFO - 2019-01-06 12:38:33 385453 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:38:33 388597 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:38:33 388730 --> Utf8 Class Initialized
INFO - 2019-01-06 12:38:33 390376 --> URI Class Initialized
INFO - 2019-01-06 12:38:33 394979 --> Router Class Initialized
INFO - 2019-01-06 12:38:33 397631 --> Output Class Initialized
INFO - 2019-01-06 12:38:33 399666 --> Security Class Initialized
DEBUG - 2019-01-06 12:38:33 401704 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:38:33 401833 --> Input Class Initialized
INFO - 2019-01-06 12:38:33 402520 --> Language Class Initialized
INFO - 2019-01-06 12:38:33 407143 --> Loader Class Initialized
INFO - 2019-01-06 12:38:33 408772 --> Helper loaded: url_helper
INFO - 2019-01-06 12:38:33 409634 --> Helper loaded: utility_helper
INFO - 2019-01-06 18:08:33 420084 --> Database Driver Class Initialized
INFO - 2019-01-06 18:08:33 428466 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-06 18:08:33 429955 --> Controller Class Initialized
INFO - 2019-01-06 18:08:33 430721 --> Parser Class Initialized
INFO - 2019-01-06 18:08:33 431823 --> Helper loaded: html_helper
INFO - 2019-01-06 18:08:33 435195 --> Model Class Initialized
DEBUG - 2019-01-06 18:08:33 455751 --> listing_model: getSectorListTesting0120121: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
DEBUG - 2019-01-06 18:08:33 466242 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
INFO - 2019-01-06 18:08:33 467106 --> Model Class Initialized
DEBUG - 2019-01-06 18:08:33 469332 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-06 18:08:33 470535 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-06 18:08:33 481467 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-06 18:08:33 484637 --> Helper loaded: file_helper
DEBUG - 2019-01-06 18:08:33 484826 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-06 18:08:33 488378 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 490411 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 511331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 512305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 512756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 516375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 517131 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 517618 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 520469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 521188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 521583 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 524503 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 525263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 525671 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 528603 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 530478 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 530913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 533725 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 536200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 536998 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 537410 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 540420 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 541649 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 542773 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 543538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 543920 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 546978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 547981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 549060 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 549822 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 550210 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 553220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 554147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 555217 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 556003 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 556415 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 559566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 560539 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 561685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 562483 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 562901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 566205 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 567143 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-06 18:08:33 568269 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2019-01-06 18:08:33 571115 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 573632 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 574048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:08:33 577135 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-06 18:08:33 577902 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-06 18:08:33 586882 --> Final output sent to browser
DEBUG - 2019-01-06 18:08:33 587012 --> Total execution time: 0.1960
INFO - 2019-01-06 12:38:33 794369 --> Config Class Initialized
INFO - 2019-01-06 12:38:33 794545 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:38:33 796750 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:38:33 796880 --> Utf8 Class Initialized
INFO - 2019-01-06 12:38:33 798166 --> URI Class Initialized
INFO - 2019-01-06 12:38:33 801554 --> Router Class Initialized
INFO - 2019-01-06 12:38:33 803932 --> Output Class Initialized
INFO - 2019-01-06 12:38:33 805780 --> Security Class Initialized
DEBUG - 2019-01-06 12:38:33 807670 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:38:33 807801 --> Input Class Initialized
INFO - 2019-01-06 12:38:33 808372 --> Language Class Initialized
ERROR - 2019-01-06 12:38:33 809295 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-06 12:38:33 853696 --> Config Class Initialized
INFO - 2019-01-06 12:38:33 853838 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:38:33 855782 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:38:33 855906 --> Utf8 Class Initialized
INFO - 2019-01-06 12:38:33 857093 --> URI Class Initialized
INFO - 2019-01-06 12:38:33 861561 --> Router Class Initialized
INFO - 2019-01-06 12:38:33 865010 --> Output Class Initialized
INFO - 2019-01-06 12:38:33 866965 --> Security Class Initialized
DEBUG - 2019-01-06 12:38:37 905647 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:38:37 905852 --> Input Class Initialized
INFO - 2019-01-06 12:38:37 906708 --> Language Class Initialized
ERROR - 2019-01-06 12:38:37 908072 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-06 12:38:37 926359 --> Config Class Initialized
INFO - 2019-01-06 12:38:37 926840 --> Hooks Class Initialized
INFO - 2019-01-06 12:38:37 929955 --> Config Class Initialized
INFO - 2019-01-06 12:38:37 930445 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:38:37 933546 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:38:37 933686 --> Utf8 Class Initialized
INFO - 2019-01-06 12:38:37 935290 --> URI Class Initialized
DEBUG - 2019-01-06 12:38:37 940941 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:38:37 941071 --> Utf8 Class Initialized
INFO - 2019-01-06 12:38:37 942605 --> URI Class Initialized
INFO - 2019-01-06 12:38:37 945252 --> Router Class Initialized
INFO - 2019-01-06 12:38:37 947850 --> Output Class Initialized
INFO - 2019-01-06 12:38:37 950078 --> Router Class Initialized
INFO - 2019-01-06 12:38:37 952773 --> Output Class Initialized
INFO - 2019-01-06 12:38:37 954966 --> Security Class Initialized
INFO - 2019-01-06 12:38:37 958918 --> Security Class Initialized
DEBUG - 2019-01-06 12:38:37 961185 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:38:37 961313 --> Input Class Initialized
INFO - 2019-01-06 12:38:37 961927 --> Language Class Initialized
DEBUG - 2019-01-06 12:38:37 970108 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:38:37 970238 --> Input Class Initialized
INFO - 2019-01-06 12:38:37 970993 --> Language Class Initialized
ERROR - 2019-01-06 12:38:37 972292 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-06 12:38:37 979290 --> Loader Class Initialized
INFO - 2019-01-06 12:38:37 981717 --> Helper loaded: url_helper
INFO - 2019-01-06 12:38:37 983036 --> Helper loaded: utility_helper
INFO - 2019-01-06 18:08:37 997860 --> Database Driver Class Initialized
INFO - 2019-01-06 18:08:38 007848 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-06 18:08:38 009301 --> Controller Class Initialized
INFO - 2019-01-06 18:08:38 010422 --> Final output sent to browser
DEBUG - 2019-01-06 18:08:38 010587 --> Total execution time: 0.0958
INFO - 2019-01-06 12:38:38 089996 --> Config Class Initialized
INFO - 2019-01-06 12:38:38 090151 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:38:38 093846 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:38:38 093976 --> Utf8 Class Initialized
INFO - 2019-01-06 12:38:38 095302 --> URI Class Initialized
INFO - 2019-01-06 12:38:38 099679 --> Router Class Initialized
INFO - 2019-01-06 12:38:38 101972 --> Output Class Initialized
INFO - 2019-01-06 12:38:38 103779 --> Security Class Initialized
DEBUG - 2019-01-06 12:38:38 105717 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:38:38 105922 --> Input Class Initialized
INFO - 2019-01-06 12:38:38 106512 --> Language Class Initialized
ERROR - 2019-01-06 12:38:38 107461 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-06 12:38:39 193536 --> Config Class Initialized
INFO - 2019-01-06 12:38:39 193876 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:38:39 196331 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:38:39 196477 --> Utf8 Class Initialized
INFO - 2019-01-06 12:38:39 198137 --> URI Class Initialized
INFO - 2019-01-06 12:38:39 202732 --> Router Class Initialized
INFO - 2019-01-06 12:38:39 205377 --> Output Class Initialized
INFO - 2019-01-06 12:38:39 207386 --> Security Class Initialized
DEBUG - 2019-01-06 12:38:39 209431 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:38:39 209573 --> Input Class Initialized
INFO - 2019-01-06 12:38:39 210200 --> Language Class Initialized
ERROR - 2019-01-06 12:38:39 211186 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-06 12:39:06 736186 --> Config Class Initialized
INFO - 2019-01-06 12:39:06 736532 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:39:06 738974 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:39:06 739104 --> Utf8 Class Initialized
INFO - 2019-01-06 12:39:06 740740 --> URI Class Initialized
INFO - 2019-01-06 12:39:06 744867 --> Router Class Initialized
INFO - 2019-01-06 12:39:06 747490 --> Output Class Initialized
INFO - 2019-01-06 12:39:06 749459 --> Security Class Initialized
DEBUG - 2019-01-06 12:39:06 751454 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:39:06 751593 --> Input Class Initialized
INFO - 2019-01-06 12:39:06 752233 --> Language Class Initialized
INFO - 2019-01-06 12:39:06 756160 --> Loader Class Initialized
INFO - 2019-01-06 12:39:06 757770 --> Helper loaded: url_helper
INFO - 2019-01-06 12:39:06 758608 --> Helper loaded: utility_helper
INFO - 2019-01-06 18:09:06 768914 --> Database Driver Class Initialized
INFO - 2019-01-06 18:09:06 777589 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-06 18:09:06 779040 --> Controller Class Initialized
INFO - 2019-01-06 18:09:06 779789 --> Parser Class Initialized
INFO - 2019-01-06 18:09:06 781676 --> Helper loaded: html_helper
INFO - 2019-01-06 18:09:06 785204 --> Model Class Initialized
DEBUG - 2019-01-06 18:09:06 797415 --> listing_model: getSectorListTesting0120121: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
DEBUG - 2019-01-06 18:09:06 807671 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 5]
INFO - 2019-01-06 18:09:06 808610 --> Model Class Initialized
DEBUG - 2019-01-06 18:09:06 809493 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-06 18:09:06 810708 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-06 18:09:06 814383 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-06 18:09:06 816422 --> Helper loaded: file_helper
DEBUG - 2019-01-06 18:09:06 816617 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-06 18:09:06 820187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 822001 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 832464 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 833362 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 833816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 836711 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 837449 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 837842 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 840637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 841336 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 841749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 844614 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 845335 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 845745 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 848628 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 851439 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 852051 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 856962 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 860229 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 862849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 863331 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 867100 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 868468 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 869370 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 870470 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 870836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 873433 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 874512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 875380 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 876091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 876445 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 879379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 881539 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 882843 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 883765 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 884264 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 888386 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 889625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 891743 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 893153 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 893923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 900166 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 901638 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-06 18:09:06 903811 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2019-01-06 18:09:06 908322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 911806 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 912513 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:09:06 917865 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-06 18:09:06 918608 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-06 18:09:06 927561 --> Final output sent to browser
DEBUG - 2019-01-06 18:09:06 927695 --> Total execution time: 0.1855
INFO - 2019-01-06 12:39:07 197563 --> Config Class Initialized
INFO - 2019-01-06 12:39:07 197691 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:39:07 199430 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:39:07 199553 --> Utf8 Class Initialized
INFO - 2019-01-06 12:39:07 200591 --> URI Class Initialized
INFO - 2019-01-06 12:39:07 203408 --> Router Class Initialized
INFO - 2019-01-06 12:39:07 216361 --> Config Class Initialized
INFO - 2019-01-06 12:39:07 216651 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:39:07 220052 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:39:07 220160 --> Utf8 Class Initialized
INFO - 2019-01-06 12:39:07 221502 --> URI Class Initialized
INFO - 2019-01-06 12:39:07 225438 --> Output Class Initialized
INFO - 2019-01-06 12:39:07 226960 --> Security Class Initialized
DEBUG - 2019-01-06 12:39:07 229118 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:39:07 229223 --> Input Class Initialized
INFO - 2019-01-06 12:39:07 229713 --> Language Class Initialized
ERROR - 2019-01-06 12:39:07 230540 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-06 12:39:07 233055 --> Router Class Initialized
INFO - 2019-01-06 12:39:07 235196 --> Output Class Initialized
INFO - 2019-01-06 12:39:07 236816 --> Security Class Initialized
DEBUG - 2019-01-06 12:39:07 239228 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:39:07 239332 --> Input Class Initialized
INFO - 2019-01-06 12:39:07 239876 --> Language Class Initialized
ERROR - 2019-01-06 12:39:07 240819 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-06 12:39:07 297915 --> Config Class Initialized
INFO - 2019-01-06 12:39:07 298269 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:39:07 301342 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:39:07 301480 --> Utf8 Class Initialized
INFO - 2019-01-06 12:39:07 303782 --> URI Class Initialized
INFO - 2019-01-06 12:39:07 307864 --> Router Class Initialized
INFO - 2019-01-06 12:39:07 311548 --> Output Class Initialized
INFO - 2019-01-06 12:39:07 313205 --> Security Class Initialized
DEBUG - 2019-01-06 12:39:07 314829 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:39:07 314934 --> Input Class Initialized
INFO - 2019-01-06 12:39:07 315488 --> Language Class Initialized
ERROR - 2019-01-06 12:39:07 316292 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-06 12:39:08 561681 --> Config Class Initialized
INFO - 2019-01-06 12:39:08 561853 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:39:08 564701 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:39:08 564848 --> Utf8 Class Initialized
INFO - 2019-01-06 12:39:08 566359 --> URI Class Initialized
INFO - 2019-01-06 12:39:08 568824 --> Router Class Initialized
INFO - 2019-01-06 12:39:08 571832 --> Output Class Initialized
INFO - 2019-01-06 12:39:08 573714 --> Security Class Initialized
DEBUG - 2019-01-06 12:39:08 575690 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:39:08 575828 --> Input Class Initialized
INFO - 2019-01-06 12:39:08 576535 --> Language Class Initialized
INFO - 2019-01-06 12:39:08 584410 --> Loader Class Initialized
INFO - 2019-01-06 12:39:08 586091 --> Helper loaded: url_helper
INFO - 2019-01-06 12:39:08 587006 --> Helper loaded: utility_helper
INFO - 2019-01-06 18:09:08 597376 --> Database Driver Class Initialized
INFO - 2019-01-06 18:09:08 605555 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-06 18:09:08 607024 --> Controller Class Initialized
INFO - 2019-01-06 18:09:08 608042 --> Final output sent to browser
DEBUG - 2019-01-06 18:09:08 608165 --> Total execution time: 0.0490
INFO - 2019-01-06 12:39:09 837662 --> Config Class Initialized
INFO - 2019-01-06 12:39:09 837986 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:39:09 840432 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:39:09 840573 --> Utf8 Class Initialized
INFO - 2019-01-06 12:39:09 842206 --> URI Class Initialized
INFO - 2019-01-06 12:39:09 846782 --> Router Class Initialized
INFO - 2019-01-06 12:39:09 849395 --> Output Class Initialized
INFO - 2019-01-06 12:39:09 851392 --> Security Class Initialized
DEBUG - 2019-01-06 12:39:09 853455 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:39:09 853599 --> Input Class Initialized
INFO - 2019-01-06 12:39:09 854262 --> Language Class Initialized
ERROR - 2019-01-06 12:39:09 855233 --> 404 Page Not Found: Browse-sector-list/18
INFO - 2019-01-06 12:40:34 493997 --> Config Class Initialized
INFO - 2019-01-06 12:40:34 494196 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:40:34 495723 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:40:34 495800 --> Utf8 Class Initialized
INFO - 2019-01-06 12:40:34 496726 --> URI Class Initialized
INFO - 2019-01-06 12:40:34 498574 --> Router Class Initialized
INFO - 2019-01-06 12:40:34 500076 --> Output Class Initialized
INFO - 2019-01-06 12:40:34 501169 --> Security Class Initialized
DEBUG - 2019-01-06 12:40:34 502386 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:40:34 502485 --> Input Class Initialized
INFO - 2019-01-06 12:40:34 502847 --> Language Class Initialized
INFO - 2019-01-06 12:40:34 536601 --> Loader Class Initialized
INFO - 2019-01-06 12:40:34 537996 --> Helper loaded: url_helper
INFO - 2019-01-06 12:40:34 538734 --> Helper loaded: utility_helper
INFO - 2019-01-06 18:10:34 562879 --> Database Driver Class Initialized
INFO - 2019-01-06 18:10:34 593863 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-06 18:10:34 594856 --> Controller Class Initialized
INFO - 2019-01-06 18:10:34 595335 --> Parser Class Initialized
INFO - 2019-01-06 18:10:34 596029 --> Helper loaded: html_helper
DEBUG - 2019-01-06 18:10:34 596122 --> Controller:::::::::::::::: sell_a_business
INFO - 2019-01-06 18:10:34 599252 --> Model Class Initialized
INFO - 2019-01-06 18:10:34 613821 --> Helper loaded: cookie_helper
INFO - 2019-01-06 18:10:34 614537 --> Model Class Initialized
DEBUG - 2019-01-06 18:10:34 615096 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-06 18:10:34 624043 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-06 18:10:34 639908 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-06 18:10:34 641321 --> Helper loaded: file_helper
DEBUG - 2019-01-06 18:10:34 641519 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-06 18:10:34 650152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:10:34 651417 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:10:34 653654 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:10:34 654294 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:10:34 654889 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:10:34 655700 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-06 18:10:34 656683 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/listing-details-sell.php
DEBUG - 2019-01-06 18:10:34 658456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:10:34 659661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:10:34 659920 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-06 18:10:34 663206 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-06 18:10:34 664558 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-06 18:10:34 672662 --> Final output sent to browser
DEBUG - 2019-01-06 18:10:34 672746 --> Total execution time: 0.1726
INFO - 2019-01-06 12:40:34 805011 --> Config Class Initialized
INFO - 2019-01-06 12:40:34 805352 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:40:34 808022 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:40:34 808155 --> Utf8 Class Initialized
INFO - 2019-01-06 12:40:34 810045 --> URI Class Initialized
INFO - 2019-01-06 12:40:34 814863 --> Router Class Initialized
INFO - 2019-01-06 12:40:34 817681 --> Output Class Initialized
INFO - 2019-01-06 12:40:34 819709 --> Security Class Initialized
DEBUG - 2019-01-06 12:40:34 822535 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:40:34 822666 --> Input Class Initialized
INFO - 2019-01-06 12:40:34 823299 --> Language Class Initialized
ERROR - 2019-01-06 12:40:34 824323 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-06 12:40:34 851275 --> Config Class Initialized
INFO - 2019-01-06 12:40:34 851388 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:40:34 852843 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:40:34 852925 --> Utf8 Class Initialized
INFO - 2019-01-06 12:40:34 853722 --> URI Class Initialized
INFO - 2019-01-06 12:40:34 856297 --> Router Class Initialized
INFO - 2019-01-06 12:40:34 858201 --> Output Class Initialized
INFO - 2019-01-06 12:40:34 859608 --> Security Class Initialized
DEBUG - 2019-01-06 12:40:34 860894 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:40:34 860975 --> Input Class Initialized
INFO - 2019-01-06 12:40:34 861324 --> Language Class Initialized
ERROR - 2019-01-06 12:40:34 861900 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-06 12:40:34 883416 --> Config Class Initialized
INFO - 2019-01-06 12:40:34 883629 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:40:34 885009 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:40:34 885082 --> Utf8 Class Initialized
INFO - 2019-01-06 12:40:34 885997 --> URI Class Initialized
INFO - 2019-01-06 12:40:34 888931 --> Config Class Initialized
INFO - 2019-01-06 12:40:34 889105 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:40:34 890465 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:40:34 890546 --> Utf8 Class Initialized
INFO - 2019-01-06 12:40:34 891448 --> URI Class Initialized
INFO - 2019-01-06 12:40:34 893974 --> Router Class Initialized
INFO - 2019-01-06 12:40:34 895461 --> Output Class Initialized
INFO - 2019-01-06 12:40:34 900506 --> Router Class Initialized
INFO - 2019-01-06 12:40:34 905077 --> Output Class Initialized
INFO - 2019-01-06 12:40:34 907952 --> Security Class Initialized
DEBUG - 2019-01-06 12:40:34 909077 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:40:34 909149 --> Input Class Initialized
INFO - 2019-01-06 12:40:34 909512 --> Language Class Initialized
ERROR - 2019-01-06 12:40:34 910078 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-06 12:40:34 911967 --> Security Class Initialized
DEBUG - 2019-01-06 12:40:34 913080 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:40:34 913167 --> Input Class Initialized
INFO - 2019-01-06 12:40:34 913532 --> Language Class Initialized
INFO - 2019-01-06 12:40:34 917932 --> Loader Class Initialized
INFO - 2019-01-06 12:40:34 918853 --> Helper loaded: url_helper
INFO - 2019-01-06 12:40:34 919323 --> Helper loaded: utility_helper
INFO - 2019-01-06 18:10:34 925101 --> Database Driver Class Initialized
INFO - 2019-01-06 18:10:34 930704 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-06 18:10:34 931559 --> Controller Class Initialized
INFO - 2019-01-06 18:10:34 932157 --> Final output sent to browser
DEBUG - 2019-01-06 18:10:34 932225 --> Total execution time: 0.0498
INFO - 2019-01-06 12:40:35 026106 --> Config Class Initialized
INFO - 2019-01-06 12:40:35 026295 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:40:35 028151 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:40:35 028233 --> Utf8 Class Initialized
INFO - 2019-01-06 12:40:35 029542 --> URI Class Initialized
INFO - 2019-01-06 12:40:35 032012 --> Router Class Initialized
INFO - 2019-01-06 12:40:35 033492 --> Output Class Initialized
INFO - 2019-01-06 12:40:35 034670 --> Security Class Initialized
DEBUG - 2019-01-06 12:40:35 035774 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:40:35 035855 --> Input Class Initialized
INFO - 2019-01-06 12:40:35 036196 --> Language Class Initialized
ERROR - 2019-01-06 12:40:35 037270 --> 404 Page Not Found: Browse-sector-listing-details/305
INFO - 2019-01-06 12:40:36 387037 --> Config Class Initialized
INFO - 2019-01-06 12:40:36 387200 --> Hooks Class Initialized
DEBUG - 2019-01-06 12:40:36 389286 --> UTF-8 Support Enabled
INFO - 2019-01-06 12:40:36 389415 --> Utf8 Class Initialized
INFO - 2019-01-06 12:40:36 390754 --> URI Class Initialized
INFO - 2019-01-06 12:40:36 393863 --> Router Class Initialized
INFO - 2019-01-06 12:40:36 396239 --> Output Class Initialized
INFO - 2019-01-06 12:40:36 398094 --> Security Class Initialized
DEBUG - 2019-01-06 12:40:36 399945 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-06 12:40:36 400077 --> Input Class Initialized
INFO - 2019-01-06 12:40:36 400919 --> Language Class Initialized
ERROR - 2019-01-06 12:40:36 402642 --> 404 Page Not Found: Browse-sector-listing-details/305
