<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2018-12-26 10:28:51 409311 --> Config Class Initialized
INFO - 2018-12-26 10:28:51 412607 --> Hooks Class Initialized
DEBUG - 2018-12-26 10:28:51 451729 --> UTF-8 Support Enabled
INFO - 2018-12-26 10:28:51 455508 --> Utf8 Class Initialized
INFO - 2018-12-26 10:28:51 457225 --> URI Class Initialized
DEBUG - 2018-12-26 10:28:51 496268 --> No URI present. Default controller set.
INFO - 2018-12-26 10:28:51 510618 --> Router Class Initialized
INFO - 2018-12-26 10:28:51 539613 --> Output Class Initialized
INFO - 2018-12-26 10:28:51 579989 --> Security Class Initialized
DEBUG - 2018-12-26 10:28:51 587754 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-26 10:28:51 600511 --> Input Class Initialized
INFO - 2018-12-26 10:28:51 601227 --> Language Class Initialized
INFO - 2018-12-26 10:28:51 663783 --> Loader Class Initialized
INFO - 2018-12-26 10:28:51 677941 --> Helper loaded: url_helper
INFO - 2018-12-26 10:28:51 697163 --> Helper loaded: utility_helper
INFO - 2018-12-26 15:58:51 841094 --> Database Driver Class Initialized
INFO - 2018-12-26 15:58:51 916419 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-26 15:58:52 061157 --> Controller Class Initialized
INFO - 2018-12-26 15:58:52 065882 --> Parser Class Initialized
INFO - 2018-12-26 15:58:52 074479 --> Helper loaded: html_helper
INFO - 2018-12-26 15:58:52 100999 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2018-12-26 15:58:52 140358 --> Model Class Initialized
DEBUG - 2018-12-26 15:58:52 224617 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2018-12-26 15:58:52 230746 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `form_type`, `sector_image`, `investment_required_currency`, `reqd_investment`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_sell_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_jv_business_details`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_property_tags` ON `bd_property_tags`.`tag_id` = `bd_business_details`.`property_tag_id`
LEFT JOIN `bd_sector_list` ON `bd_sector_list`.`id` = `bd_business_details`.`listing_category`
WHERE `bd_business_details`.`business_type` != 'buy_a_business'
AND `bd_business_details`.`business_type` != 'startup_business'
AND `bd_property_tags`.`tag_name` = 'New'
AND `bd_business_details`.`expiry_date` >= '2018-12-26'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2018-12-26 15:58:52 241081 --> Model Class Initialized
DEBUG - 2018-12-26 15:58:52 242682 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2018-12-26 15:58:52 429934 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2018-12-26 15:58:52 445943 --> Helper loaded: file_helper
DEBUG - 2018-12-26 15:58:52 453583 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2018-12-26 15:58:52 510353 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 641891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 777750 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 785621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 787296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 787559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 787974 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 788700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 791158 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 791546 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 791961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 792648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 794173 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 794400 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 794806 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 795469 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 797086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 797321 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 797748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 798501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 800348 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 800601 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 801009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 801682 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 803544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 803939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 804615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 805404 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 807568 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 807930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 808553 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 809369 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 812437 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 812875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 813740 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 814441 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 816445 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 816693 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 817239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 817758 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 818212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 818675 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 819111 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 820239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 820698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 821141 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 821579 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 822012 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 822468 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 822937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 823407 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 823858 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 824362 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 824815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 825349 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 825792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 826219 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 826764 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 827212 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 827744 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 829925 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 830365 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 831177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 831846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 833652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 833897 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 834677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 835256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 836961 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 837232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 837805 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 838361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 840256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 840524 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 841027 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 841866 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 844060 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 844306 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 844803 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 847127 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 850389 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 850856 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 851768 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 854928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 855977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 859200 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 860181 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 863326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 864322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 867604 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 868588 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 871757 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 872729 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 875906 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-26 15:58:52 876859 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2018-12-26 15:58:52 889816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 891566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 891827 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2018-12-26 15:58:52 893897 --> Cache class already loaded. Second attempt ignored.
INFO - 2018-12-26 15:58:52 894314 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2018-12-26 15:58:52 903131 --> Final output sent to browser
DEBUG - 2018-12-26 15:58:52 903306 --> Total execution time: 1.5200
INFO - 2018-12-26 10:28:53 979406 --> Config Class Initialized
INFO - 2018-12-26 10:28:53 979608 --> Hooks Class Initialized
DEBUG - 2018-12-26 10:28:53 980912 --> UTF-8 Support Enabled
INFO - 2018-12-26 10:28:53 980984 --> Utf8 Class Initialized
INFO - 2018-12-26 10:28:53 982167 --> URI Class Initialized
INFO - 2018-12-26 10:28:53 984579 --> Router Class Initialized
INFO - 2018-12-26 10:28:53 986043 --> Output Class Initialized
INFO - 2018-12-26 10:28:53 987149 --> Security Class Initialized
DEBUG - 2018-12-26 10:28:53 988337 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-26 10:28:53 996808 --> Config Class Initialized
INFO - 2018-12-26 10:28:53 996994 --> Hooks Class Initialized
DEBUG - 2018-12-26 10:28:53 998754 --> UTF-8 Support Enabled
INFO - 2018-12-26 10:28:53 998826 --> Utf8 Class Initialized
INFO - 2018-12-26 10:28:53 999783 --> Input Class Initialized
INFO - 2018-12-26 10:28:54 000267 --> Language Class Initialized
INFO - 2018-12-26 10:28:54 000854 --> URI Class Initialized
INFO - 2018-12-26 10:28:54 005304 --> Router Class Initialized
ERROR - 2018-12-26 10:28:54 009556 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-26 10:28:54 010468 --> Output Class Initialized
INFO - 2018-12-26 10:28:54 011878 --> Security Class Initialized
DEBUG - 2018-12-26 10:28:54 013227 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-26 10:28:54 013320 --> Input Class Initialized
INFO - 2018-12-26 10:28:54 013761 --> Language Class Initialized
ERROR - 2018-12-26 10:28:54 015289 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2018-12-26 10:28:54 180875 --> Config Class Initialized
INFO - 2018-12-26 10:28:54 180974 --> Hooks Class Initialized
DEBUG - 2018-12-26 10:28:54 182526 --> UTF-8 Support Enabled
INFO - 2018-12-26 10:28:54 182773 --> Utf8 Class Initialized
INFO - 2018-12-26 10:28:54 184235 --> URI Class Initialized
INFO - 2018-12-26 10:28:54 186079 --> Router Class Initialized
INFO - 2018-12-26 10:28:54 188251 --> Output Class Initialized
INFO - 2018-12-26 10:28:54 189955 --> Security Class Initialized
DEBUG - 2018-12-26 10:28:54 191095 --> Global POST, GET and COOKIE data sanitized
INFO - 2018-12-26 10:28:54 191168 --> Input Class Initialized
INFO - 2018-12-26 10:28:54 191493 --> Language Class Initialized
INFO - 2018-12-26 10:28:54 204421 --> Loader Class Initialized
INFO - 2018-12-26 10:28:54 205481 --> Helper loaded: url_helper
INFO - 2018-12-26 10:28:54 206042 --> Helper loaded: utility_helper
INFO - 2018-12-26 15:58:54 211572 --> Database Driver Class Initialized
INFO - 2018-12-26 15:58:54 307692 --> Session: Class initialized using 'files' driver.
INFO - 2018-12-26 15:58:54 308999 --> Controller Class Initialized
INFO - 2018-12-26 15:58:54 310069 --> Final output sent to browser
DEBUG - 2018-12-26 15:58:54 310201 --> Total execution time: 0.1306
