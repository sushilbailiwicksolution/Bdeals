<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2019-01-24 05:07:45 401186 --> Config Class Initialized
INFO - 2019-01-24 05:07:45 401638 --> Hooks Class Initialized
DEBUG - 2019-01-24 05:07:45 406575 --> UTF-8 Support Enabled
INFO - 2019-01-24 05:07:45 406708 --> Utf8 Class Initialized
INFO - 2019-01-24 05:07:45 408833 --> URI Class Initialized
DEBUG - 2019-01-24 05:07:45 420742 --> No URI present. Default controller set.
INFO - 2019-01-24 05:07:45 420876 --> Router Class Initialized
INFO - 2019-01-24 05:07:45 427923 --> Output Class Initialized
INFO - 2019-01-24 05:07:45 430207 --> Security Class Initialized
DEBUG - 2019-01-24 05:07:45 442780 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 05:07:45 442924 --> Input Class Initialized
INFO - 2019-01-24 05:07:45 443825 --> Language Class Initialized
INFO - 2019-01-24 05:07:45 467981 --> Loader Class Initialized
INFO - 2019-01-24 05:07:45 475765 --> Helper loaded: url_helper
INFO - 2019-01-24 05:07:45 482610 --> Helper loaded: utility_helper
INFO - 2019-01-24 10:37:45 499922 --> Database Driver Class Initialized
INFO - 2019-01-24 10:37:45 540203 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-24 10:37:45 550415 --> Controller Class Initialized
INFO - 2019-01-24 10:37:45 558027 --> Parser Class Initialized
INFO - 2019-01-24 10:37:45 559340 --> Helper loaded: html_helper
INFO - 2019-01-24 10:37:45 566051 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-24 10:37:45 578100 --> Model Class Initialized
DEBUG - 2019-01-24 10:37:45 601646 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-24 10:37:45 613065 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-24'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-24 10:37:45 619223 --> Model Class Initialized
DEBUG - 2019-01-24 10:37:45 620726 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-24 10:37:45 637831 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-24 10:37:45 645035 --> Helper loaded: file_helper
DEBUG - 2019-01-24 10:37:45 645287 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-24 10:37:45 655870 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 666217 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 683978 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 689821 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 692869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 693306 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 694044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 695010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 697882 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 698292 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 699006 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-24 10:37:45 700783 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-24 10:37:45 700949 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-24 10:37:45 701155 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 704024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 704448 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 705348 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 706516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 711249 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 711760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 712920 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 714091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 718220 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 718950 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 720262 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 721069 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 724034 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 724479 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 725549 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 726490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 730360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 730807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 731611 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 732517 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 735599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 736033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 736808 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 737766 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 740864 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 741286 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 742083 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 743046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 746174 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 746674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 747473 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 748500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 751748 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 752177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 752999 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 754045 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 757278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 757738 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 758620 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-24 10:37:45 759623 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-24 10:37:45 759777 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-24 10:37:45 759979 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 763124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 763580 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 764400 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 765326 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 768538 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 768974 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 769815 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 770790 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 773927 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 774360 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 775219 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 776158 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 779290 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 779742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 780590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 781562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 784687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 785120 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 785995 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 786891 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 787686 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 788475 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 789261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 790074 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 790843 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 791661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 792480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 793267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 794110 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 794905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 795713 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 796541 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 797342 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 798147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 798949 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 799838 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 800762 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 801621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 802452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 803247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 804068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 804900 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 805747 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 806662 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 807509 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 808314 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 809385 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 810250 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 811304 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 812136 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 813189 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 814229 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 815215 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 815949 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 819367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 819823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 820756 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 821834 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 825059 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 825544 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 826423 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 827478 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 830610 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 831044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 831928 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 832894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 836057 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 836566 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 837488 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 838422 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 841569 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 842008 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 842905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 843862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 847024 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 847497 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 848367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 851527 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 851977 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 852880 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 853811 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 857022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 857491 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 858325 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 859213 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 864044 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 864739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 866091 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 867156 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 870459 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 870910 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 871807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 872642 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 875782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 876224 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 877085 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 877911 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 881072 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 881720 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 882780 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-24 10:37:45 884236 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-24 10:37:45 894258 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 896333 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 896799 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 10:37:45 900477 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-24 10:37:45 901252 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-24 10:37:45 911262 --> Final output sent to browser
DEBUG - 2019-01-24 10:37:45 911408 --> Total execution time: 0.5158
INFO - 2019-01-24 05:07:51 001336 --> Config Class Initialized
INFO - 2019-01-24 05:07:51 001728 --> Hooks Class Initialized
DEBUG - 2019-01-24 05:07:51 006103 --> UTF-8 Support Enabled
INFO - 2019-01-24 05:07:51 006305 --> Utf8 Class Initialized
INFO - 2019-01-24 05:07:51 009253 --> URI Class Initialized
INFO - 2019-01-24 05:07:51 015170 --> Router Class Initialized
INFO - 2019-01-24 05:07:51 017932 --> Output Class Initialized
INFO - 2019-01-24 05:07:51 020322 --> Security Class Initialized
DEBUG - 2019-01-24 05:07:51 022567 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 05:07:51 022706 --> Input Class Initialized
INFO - 2019-01-24 05:07:51 023694 --> Language Class Initialized
INFO - 2019-01-24 05:07:51 040467 --> Loader Class Initialized
INFO - 2019-01-24 05:07:51 042135 --> Helper loaded: url_helper
INFO - 2019-01-24 05:07:51 043042 --> Helper loaded: utility_helper
INFO - 2019-01-24 10:37:51 053483 --> Database Driver Class Initialized
INFO - 2019-01-24 10:37:51 061853 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-24 10:37:51 063332 --> Controller Class Initialized
INFO - 2019-01-24 10:37:51 064449 --> Final output sent to browser
DEBUG - 2019-01-24 10:37:51 065093 --> Total execution time: 0.0670
INFO - 2019-01-24 05:07:52 305584 --> Config Class Initialized
INFO - 2019-01-24 05:07:52 305787 --> Hooks Class Initialized
DEBUG - 2019-01-24 05:07:52 307188 --> UTF-8 Support Enabled
INFO - 2019-01-24 05:07:52 307264 --> Utf8 Class Initialized
INFO - 2019-01-24 05:07:52 308175 --> URI Class Initialized
INFO - 2019-01-24 05:07:52 310935 --> Router Class Initialized
INFO - 2019-01-24 05:07:52 312370 --> Output Class Initialized
INFO - 2019-01-24 05:07:52 313667 --> Security Class Initialized
DEBUG - 2019-01-24 05:07:52 314903 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 05:07:52 314977 --> Input Class Initialized
INFO - 2019-01-24 05:07:52 315329 --> Language Class Initialized
ERROR - 2019-01-24 05:07:52 315937 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-24 05:07:52 581150 --> Config Class Initialized
INFO - 2019-01-24 05:07:52 581418 --> Hooks Class Initialized
DEBUG - 2019-01-24 05:07:52 584742 --> UTF-8 Support Enabled
INFO - 2019-01-24 05:07:52 584923 --> Utf8 Class Initialized
INFO - 2019-01-24 05:07:52 587675 --> URI Class Initialized
INFO - 2019-01-24 05:07:52 591635 --> Router Class Initialized
INFO - 2019-01-24 05:07:52 593732 --> Output Class Initialized
INFO - 2019-01-24 05:07:52 595182 --> Security Class Initialized
DEBUG - 2019-01-24 05:07:52 596630 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 05:07:52 596728 --> Input Class Initialized
INFO - 2019-01-24 05:07:52 597196 --> Language Class Initialized
ERROR - 2019-01-24 05:07:52 597933 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-24 05:07:52 715595 --> Config Class Initialized
INFO - 2019-01-24 05:07:52 715770 --> Hooks Class Initialized
DEBUG - 2019-01-24 05:07:52 718631 --> UTF-8 Support Enabled
INFO - 2019-01-24 05:07:52 718769 --> Utf8 Class Initialized
INFO - 2019-01-24 05:07:52 738342 --> URI Class Initialized
INFO - 2019-01-24 05:07:52 741676 --> Router Class Initialized
INFO - 2019-01-24 05:07:52 744364 --> Output Class Initialized
INFO - 2019-01-24 05:07:52 753170 --> Security Class Initialized
DEBUG - 2019-01-24 05:07:52 755083 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 05:07:52 755213 --> Input Class Initialized
INFO - 2019-01-24 05:07:52 755839 --> Language Class Initialized
ERROR - 2019-01-24 05:07:52 756803 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-24 05:07:52 758569 --> Config Class Initialized
INFO - 2019-01-24 05:07:52 758924 --> Hooks Class Initialized
DEBUG - 2019-01-24 05:07:52 761437 --> UTF-8 Support Enabled
INFO - 2019-01-24 05:07:52 761579 --> Utf8 Class Initialized
INFO - 2019-01-24 05:07:52 763221 --> URI Class Initialized
INFO - 2019-01-24 05:07:52 765449 --> Config Class Initialized
INFO - 2019-01-24 05:07:52 765791 --> Hooks Class Initialized
DEBUG - 2019-01-24 05:07:52 768285 --> UTF-8 Support Enabled
INFO - 2019-01-24 05:07:52 768426 --> Utf8 Class Initialized
INFO - 2019-01-24 05:07:52 770077 --> URI Class Initialized
INFO - 2019-01-24 05:07:52 774904 --> Router Class Initialized
INFO - 2019-01-24 05:07:52 777650 --> Output Class Initialized
INFO - 2019-01-24 05:07:52 781814 --> Router Class Initialized
INFO - 2019-01-24 05:07:52 784518 --> Output Class Initialized
INFO - 2019-01-24 05:07:52 786514 --> Security Class Initialized
DEBUG - 2019-01-24 05:07:52 788471 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 05:07:52 788603 --> Input Class Initialized
INFO - 2019-01-24 05:07:52 789212 --> Language Class Initialized
ERROR - 2019-01-24 05:07:52 790209 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-24 05:07:52 790704 --> Security Class Initialized
DEBUG - 2019-01-24 05:07:52 792691 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 05:07:52 792820 --> Input Class Initialized
INFO - 2019-01-24 05:07:52 793445 --> Language Class Initialized
ERROR - 2019-01-24 05:07:52 794456 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-24 05:07:52 814687 --> Config Class Initialized
INFO - 2019-01-24 05:07:52 814811 --> Hooks Class Initialized
DEBUG - 2019-01-24 05:07:52 816540 --> UTF-8 Support Enabled
INFO - 2019-01-24 05:07:52 816638 --> Utf8 Class Initialized
INFO - 2019-01-24 05:07:52 817648 --> URI Class Initialized
INFO - 2019-01-24 05:07:52 819892 --> Router Class Initialized
INFO - 2019-01-24 05:07:52 822540 --> Config Class Initialized
INFO - 2019-01-24 05:07:52 822647 --> Hooks Class Initialized
DEBUG - 2019-01-24 05:07:52 824341 --> UTF-8 Support Enabled
INFO - 2019-01-24 05:07:52 824451 --> Utf8 Class Initialized
INFO - 2019-01-24 05:07:52 825428 --> URI Class Initialized
INFO - 2019-01-24 05:07:52 827797 --> Router Class Initialized
INFO - 2019-01-24 05:07:52 829827 --> Output Class Initialized
INFO - 2019-01-24 05:07:52 831244 --> Security Class Initialized
DEBUG - 2019-01-24 05:07:52 832623 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 05:07:52 832722 --> Input Class Initialized
INFO - 2019-01-24 05:07:52 833158 --> Language Class Initialized
INFO - 2019-01-24 05:07:52 833832 --> Output Class Initialized
INFO - 2019-01-24 05:07:52 835263 --> Security Class Initialized
DEBUG - 2019-01-24 05:07:52 836637 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 05:07:52 836735 --> Input Class Initialized
INFO - 2019-01-24 05:07:52 837168 --> Language Class Initialized
ERROR - 2019-01-24 05:07:52 837876 --> 404 Page Not Found: Uploads/gauravgmail.com
ERROR - 2019-01-24 05:07:52 840107 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-24 05:07:56 514759 --> Config Class Initialized
INFO - 2019-01-24 05:07:56 514914 --> Hooks Class Initialized
DEBUG - 2019-01-24 05:07:56 517009 --> UTF-8 Support Enabled
INFO - 2019-01-24 05:07:56 517138 --> Utf8 Class Initialized
INFO - 2019-01-24 05:07:56 518469 --> URI Class Initialized
INFO - 2019-01-24 05:07:56 521697 --> Router Class Initialized
INFO - 2019-01-24 05:07:56 524214 --> Output Class Initialized
INFO - 2019-01-24 05:07:56 526235 --> Security Class Initialized
DEBUG - 2019-01-24 05:07:56 528165 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 05:07:56 528295 --> Input Class Initialized
INFO - 2019-01-24 05:07:56 528903 --> Language Class Initialized
ERROR - 2019-01-24 05:07:56 529859 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-24 09:45:27 482764 --> Config Class Initialized
INFO - 2019-01-24 09:45:27 490403 --> Hooks Class Initialized
DEBUG - 2019-01-24 09:45:27 521820 --> UTF-8 Support Enabled
INFO - 2019-01-24 09:45:27 525589 --> Utf8 Class Initialized
INFO - 2019-01-24 09:45:27 527494 --> URI Class Initialized
DEBUG - 2019-01-24 09:45:27 566028 --> No URI present. Default controller set.
INFO - 2019-01-24 09:45:27 580605 --> Router Class Initialized
INFO - 2019-01-24 09:45:27 611305 --> Output Class Initialized
INFO - 2019-01-24 09:45:27 617520 --> Security Class Initialized
DEBUG - 2019-01-24 09:45:27 651499 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 09:45:27 665541 --> Input Class Initialized
INFO - 2019-01-24 09:45:27 666341 --> Language Class Initialized
INFO - 2019-01-24 09:45:27 727066 --> Loader Class Initialized
INFO - 2019-01-24 09:45:27 731494 --> Helper loaded: url_helper
INFO - 2019-01-24 09:45:27 753329 --> Helper loaded: utility_helper
INFO - 2019-01-24 15:15:27 884929 --> Database Driver Class Initialized
INFO - 2019-01-24 15:15:27 923302 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-24 15:15:27 944907 --> Controller Class Initialized
INFO - 2019-01-24 15:15:27 950236 --> Parser Class Initialized
INFO - 2019-01-24 15:15:27 957488 --> Helper loaded: html_helper
INFO - 2019-01-24 15:15:27 975148 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-24 15:15:27 994352 --> Model Class Initialized
DEBUG - 2019-01-24 15:15:28 135087 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-24 15:15:28 141871 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-24'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-24 15:15:28 146878 --> Model Class Initialized
DEBUG - 2019-01-24 15:15:28 148519 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-24 15:15:28 205012 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-24 15:15:28 221172 --> Helper loaded: file_helper
DEBUG - 2019-01-24 15:15:28 224630 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-24 15:15:28 245194 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 252244 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 318099 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 333178 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 335700 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 336064 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 336672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 337549 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 339795 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 340125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 340704 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-24 15:15:28 342166 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-24 15:15:28 342319 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-24 15:15:28 342510 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 344849 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 345172 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 345757 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 346896 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 349256 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 349626 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 350209 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 350986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 353364 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 353792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 354408 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 355199 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 357603 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 357944 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 358552 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 359333 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 361969 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 362317 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 362936 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 363739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 366214 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 366585 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 367197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 367986 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 370498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 370846 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 371474 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 372243 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 374736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 375080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 375735 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 376547 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 379095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 379456 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 380108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 380918 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 383459 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 383836 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 384505 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-24 15:15:28 385283 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-24 15:15:28 385421 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-24 15:15:28 385612 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 388106 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 388462 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 389122 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 389894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 392452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 392807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 393487 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 394259 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 396787 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 397140 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 397820 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 398837 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 411034 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 411705 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 412390 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 413263 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 415806 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 416157 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 416855 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 417658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 418375 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 419095 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 419807 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 420521 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 421219 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 421938 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 422646 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 423340 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 424081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 424782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 425501 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 478410 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 479247 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 480000 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 480734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 481647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 482367 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 483036 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 483710 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 484353 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 485012 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 485693 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 486471 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 487191 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 487940 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 488616 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 489342 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 490015 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 490752 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 491414 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 492156 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 492839 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 493782 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 494853 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 497679 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 498040 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 498760 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 499578 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 502162 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 502562 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 503268 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 504086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 506712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 507075 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 507797 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 508621 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 511203 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 511926 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 514152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 515522 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 522452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 522830 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 523567 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 524460 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 526984 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 527345 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 528121 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 530637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 530987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 531678 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 532599 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 535202 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 535593 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 536266 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 537187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 539695 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 540047 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 540745 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 541781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 547300 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 547864 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 548784 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 549892 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 553272 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 553759 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 555207 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 556385 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 559355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 559792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 560589 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-24 15:15:28 561554 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-24 15:15:28 572619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 574238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 574687 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 15:15:28 577491 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-24 15:15:28 578262 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-24 15:15:28 585809 --> Final output sent to browser
DEBUG - 2019-01-24 15:15:28 585922 --> Total execution time: 1.1230
INFO - 2019-01-24 14:17:54 183958 --> Config Class Initialized
INFO - 2019-01-24 14:17:54 191533 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:17:54 197881 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:17:54 198057 --> Utf8 Class Initialized
INFO - 2019-01-24 14:17:54 200032 --> URI Class Initialized
INFO - 2019-01-24 14:17:54 218012 --> Router Class Initialized
INFO - 2019-01-24 14:17:54 228292 --> Output Class Initialized
INFO - 2019-01-24 14:17:54 232230 --> Security Class Initialized
DEBUG - 2019-01-24 14:17:54 242595 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:17:54 242851 --> Input Class Initialized
INFO - 2019-01-24 14:17:54 244184 --> Language Class Initialized
INFO - 2019-01-24 14:17:54 262389 --> Loader Class Initialized
INFO - 2019-01-24 14:17:54 269393 --> Helper loaded: url_helper
INFO - 2019-01-24 14:17:54 276695 --> Helper loaded: utility_helper
INFO - 2019-01-24 19:47:54 297180 --> Database Driver Class Initialized
INFO - 2019-01-24 19:47:54 311598 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-24 19:47:54 323811 --> Controller Class Initialized
INFO - 2019-01-24 19:47:54 326195 --> Parser Class Initialized
INFO - 2019-01-24 19:47:54 334939 --> Helper loaded: html_helper
INFO - 2019-01-24 19:47:54 346546 --> Model Class Initialized
INFO - 2019-01-24 19:47:54 367327 --> Model Class Initialized
DEBUG - 2019-01-24 19:47:54 370047 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-24 19:47:54 380311 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-24 19:47:54 391127 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-24 19:47:54 391310 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-24 19:47:54 409487 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-24 19:47:54 425770 --> Helper loaded: file_helper
DEBUG - 2019-01-24 19:47:54 426088 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-24 19:47:54 427555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 428590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 429572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 430536 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 431545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 432557 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 433576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 434606 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 435667 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 436676 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 437627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 438627 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 439615 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 440596 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 441590 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 442598 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 443595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 444567 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 445661 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 446502 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 447257 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 447959 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 448668 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 449347 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 450026 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-24 19:47:54 450881 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2019-01-24 19:47:54 451009 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2019-01-24 19:47:54 451102 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2019-01-24 19:47:54 462718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 476584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 485804 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:54 511516 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-24 19:47:54 526299 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-24 19:47:54 535286 --> Final output sent to browser
DEBUG - 2019-01-24 19:47:54 535454 --> Total execution time: 0.3630
INFO - 2019-01-24 14:17:56 317756 --> Config Class Initialized
INFO - 2019-01-24 14:17:56 317950 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:17:56 319246 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:17:56 319318 --> Utf8 Class Initialized
INFO - 2019-01-24 14:17:56 320185 --> URI Class Initialized
INFO - 2019-01-24 14:17:56 322639 --> Router Class Initialized
INFO - 2019-01-24 14:17:56 324028 --> Output Class Initialized
INFO - 2019-01-24 14:17:56 325077 --> Security Class Initialized
DEBUG - 2019-01-24 14:17:56 326069 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:17:56 326148 --> Input Class Initialized
INFO - 2019-01-24 14:17:56 326482 --> Language Class Initialized
ERROR - 2019-01-24 14:17:56 327044 --> 404 Page Not Found: Images/favicon.php
INFO - 2019-01-24 14:17:59 558944 --> Config Class Initialized
INFO - 2019-01-24 14:17:59 559145 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:17:59 560601 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:17:59 560671 --> Utf8 Class Initialized
INFO - 2019-01-24 14:17:59 562092 --> URI Class Initialized
INFO - 2019-01-24 14:17:59 565263 --> Router Class Initialized
INFO - 2019-01-24 14:17:59 566970 --> Output Class Initialized
INFO - 2019-01-24 14:17:59 568922 --> Security Class Initialized
DEBUG - 2019-01-24 14:17:59 570600 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:17:59 570693 --> Input Class Initialized
INFO - 2019-01-24 14:17:59 571187 --> Language Class Initialized
INFO - 2019-01-24 14:17:59 573854 --> Loader Class Initialized
INFO - 2019-01-24 14:17:59 574846 --> Helper loaded: url_helper
INFO - 2019-01-24 14:17:59 575390 --> Helper loaded: utility_helper
INFO - 2019-01-24 19:47:59 580949 --> Database Driver Class Initialized
INFO - 2019-01-24 19:47:59 587171 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-24 19:47:59 588414 --> Controller Class Initialized
INFO - 2019-01-24 19:47:59 588830 --> Parser Class Initialized
INFO - 2019-01-24 19:47:59 589458 --> Helper loaded: html_helper
INFO - 2019-01-24 19:47:59 591285 --> Model Class Initialized
INFO - 2019-01-24 19:47:59 594958 --> Model Class Initialized
DEBUG - 2019-01-24 19:47:59 595614 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-24 19:47:59 596297 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-24 19:47:59 596976 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-24 19:47:59 597067 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-24 19:47:59 598258 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-24 19:47:59 599349 --> Helper loaded: file_helper
DEBUG - 2019-01-24 19:47:59 599453 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-24 19:47:59 600125 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 600749 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 601339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 601991 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 602602 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 603226 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 603825 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 604449 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 605169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 605823 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 606409 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 607004 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 607657 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 608407 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 609134 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 609877 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 610685 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 611452 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 612169 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 612894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 613652 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 614470 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 615186 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 615937 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 616709 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-24 19:47:59 617538 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2019-01-24 19:47:59 617665 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2019-01-24 19:47:59 617763 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2019-01-24 19:47:59 619908 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 622679 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 623878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:47:59 631169 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-24 19:47:59 632575 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-24 19:47:59 638710 --> Final output sent to browser
DEBUG - 2019-01-24 19:47:59 638794 --> Total execution time: 0.0752
INFO - 2019-01-24 14:18:02 382216 --> Config Class Initialized
INFO - 2019-01-24 14:18:02 382467 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:18:02 384236 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:18:02 384325 --> Utf8 Class Initialized
INFO - 2019-01-24 14:18:02 385483 --> URI Class Initialized
INFO - 2019-01-24 14:18:02 387543 --> Router Class Initialized
INFO - 2019-01-24 14:18:02 389491 --> Output Class Initialized
INFO - 2019-01-24 14:18:02 391330 --> Security Class Initialized
DEBUG - 2019-01-24 14:18:02 393075 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:18:02 393182 --> Input Class Initialized
INFO - 2019-01-24 14:18:02 393723 --> Language Class Initialized
INFO - 2019-01-24 14:18:02 413130 --> Loader Class Initialized
INFO - 2019-01-24 14:18:02 414491 --> Helper loaded: url_helper
INFO - 2019-01-24 14:18:02 415133 --> Helper loaded: utility_helper
INFO - 2019-01-24 19:48:02 423338 --> Database Driver Class Initialized
INFO - 2019-01-24 19:48:02 431281 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-24 19:48:02 432919 --> Controller Class Initialized
INFO - 2019-01-24 19:48:02 434565 --> Final output sent to browser
DEBUG - 2019-01-24 19:48:02 434781 --> Total execution time: 0.0537
INFO - 2019-01-24 14:18:14 936611 --> Config Class Initialized
INFO - 2019-01-24 14:18:14 936803 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:18:14 938121 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:18:14 938189 --> Utf8 Class Initialized
INFO - 2019-01-24 14:18:14 939009 --> URI Class Initialized
DEBUG - 2019-01-24 14:18:14 940344 --> No URI present. Default controller set.
INFO - 2019-01-24 14:18:14 940418 --> Router Class Initialized
INFO - 2019-01-24 14:18:14 942100 --> Output Class Initialized
INFO - 2019-01-24 14:18:14 943139 --> Security Class Initialized
DEBUG - 2019-01-24 14:18:14 944237 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:18:14 944308 --> Input Class Initialized
INFO - 2019-01-24 14:18:14 944636 --> Language Class Initialized
INFO - 2019-01-24 14:18:14 946680 --> Loader Class Initialized
INFO - 2019-01-24 14:18:14 947542 --> Helper loaded: url_helper
INFO - 2019-01-24 14:18:14 948257 --> Helper loaded: utility_helper
INFO - 2019-01-24 19:48:14 954097 --> Database Driver Class Initialized
INFO - 2019-01-24 19:48:14 963408 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-24 19:48:14 964291 --> Controller Class Initialized
INFO - 2019-01-24 19:48:14 964798 --> Parser Class Initialized
INFO - 2019-01-24 19:48:14 965960 --> Helper loaded: html_helper
INFO - 2019-01-24 19:48:14 967142 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
INFO - 2019-01-24 19:48:14 969399 --> Model Class Initialized
DEBUG - 2019-01-24 19:48:14 990139 --> User_model: BUYERREQUIREMENT: [SELECT *
FROM `bd_buy_business_details`
LEFT JOIN `bd_business_details` ON `bd_business_details`.`form_id` = `bd_buy_business_details`.`form_id`
WHERE `bd_business_details`.`status` = 1
ORDER BY `bd_buy_business_details`.`id` DESC]
DEBUG - 2019-01-24 19:48:14 993802 --> User_model: getNewListing: [SELECT `bd_business_details`.`form_id`, `bd_sell_business_details`.`ask_price`, `bd_sell_business_details`.`ask_price_currency`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_jv_business_details`.`ask_price_currency` as `askCurrency`, `bd_jv_business_details`.`investment_required_currency`, `bd_startup_business_details`.`investment_required_currency` as `investmentRequiredCurr`, `bd_startup_business_details`.`investment_required_price`, `bd_sell_business_details`.`latest_revenu_unit`, `bd_sell_business_details`.`ask_price_unit`, `bd_jv_business_details`.`investment_required_unit`, `bd_startup_business_details`.`investment_required_unit` as `stunit`, `key_headline`, `description`, `listing_category`, `location_country`, `location_city`, `location_state`, `business_type`, `tag_name`, `tag_background_color`, `tag_color`, `path`, `document_type`, `reqd_investment`, `form_type`, `sector_image`
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
AND `bd_business_details`.`expiry_date` >= '2019-01-24'
AND `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`status` = '1'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 8]
INFO - 2019-01-24 19:48:15 003907 --> Model Class Initialized
DEBUG - 2019-01-24 19:48:15 005572 --> Last query to get testimonials list [SELECT *
FROM `bd_testimonials`]
ERROR - 2019-01-24 19:48:15 013607 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-24 19:48:15 015041 --> Helper loaded: file_helper
DEBUG - 2019-01-24 19:48:15 015161 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-24 19:48:15 018058 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 019251 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 025912 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 027228 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 028774 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 029007 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 029405 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 030119 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 033090 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 033457 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 033926 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-24 19:48:15 034956 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-24 19:48:15 035048 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-24 19:48:15 035159 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 036860 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 037112 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 037503 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 038108 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 040477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 040862 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 041512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 042309 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 044792 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 045192 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 046010 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 046816 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 049930 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 050299 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 050956 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 051784 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 057209 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 057969 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 059453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 060584 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 063412 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 063812 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 064531 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 065610 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 068221 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 068648 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 069318 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 070177 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 073261 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 073997 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 075762 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 077188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 080718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 081403 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 082278 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 109710 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 115416 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 115923 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 117628 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-24 19:48:15 118818 --> Severity: Warning --> Illegal string offset 'investment_required_price' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
ERROR - 2019-01-24 19:48:15 119138 --> Severity: Warning --> Illegal string offset 'stunit' /home/hzswn06npic1/public_html/bdeals/application/views/index.php 255
DEBUG - 2019-01-24 19:48:15 119625 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 124545 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 124933 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 126105 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 127001 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 130491 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 131086 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 131958 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 132931 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 135863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 136533 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 137274 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 138133 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 142913 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 144114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 146138 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 147658 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 153778 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 154454 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 155399 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 156486 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 157480 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 158674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 159647 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 160576 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 161355 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 162146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 163070 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 163875 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 164895 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 165708 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 166543 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 167387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 168184 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 168988 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 169780 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 170712 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 171564 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 172282 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 173013 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 173747 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 174915 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 176156 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 177114 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 177933 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 178755 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 179490 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 180305 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 181081 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 181952 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 182826 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 183664 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 184587 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 185525 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 186660 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 190016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 191204 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 192739 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 195296 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 198379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 198805 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 199605 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 200932 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 204898 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 205595 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 207142 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 208421 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 211498 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 211905 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 213373 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 214624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 219512 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 219927 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 220731 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 221736 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 225488 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 225894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 226819 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 231087 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 231718 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 232779 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 233762 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 236619 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 237037 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 237829 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 238722 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 242299 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 242721 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 243478 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 244503 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 248123 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 248637 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 249387 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 250319 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 254622 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 255033 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 255809 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 256781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 259681 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 260088 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 260864 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-24 19:48:15 262265 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/index.php
DEBUG - 2019-01-24 19:48:15 267146 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 271939 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 272917 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:15 277817 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-24 19:48:15 278829 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-24 19:48:15 293557 --> Final output sent to browser
DEBUG - 2019-01-24 19:48:15 293714 --> Total execution time: 0.3441
INFO - 2019-01-24 14:18:15 849806 --> Config Class Initialized
INFO - 2019-01-24 14:18:15 850009 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:18:15 858762 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:18:15 858902 --> Utf8 Class Initialized
INFO - 2019-01-24 14:18:15 860260 --> URI Class Initialized
INFO - 2019-01-24 14:18:15 864726 --> Router Class Initialized
INFO - 2019-01-24 14:18:15 867098 --> Output Class Initialized
INFO - 2019-01-24 14:18:15 875600 --> Config Class Initialized
INFO - 2019-01-24 14:18:15 875919 --> Hooks Class Initialized
INFO - 2019-01-24 14:18:15 878969 --> Security Class Initialized
DEBUG - 2019-01-24 14:18:15 880789 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:18:15 880919 --> Input Class Initialized
INFO - 2019-01-24 14:18:15 881546 --> Language Class Initialized
ERROR - 2019-01-24 14:18:15 882513 --> 404 Page Not Found: Uploads/gauravgmail.com
DEBUG - 2019-01-24 14:18:15 885119 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:18:15 885251 --> Utf8 Class Initialized
INFO - 2019-01-24 14:18:15 886897 --> URI Class Initialized
INFO - 2019-01-24 14:18:15 891571 --> Router Class Initialized
INFO - 2019-01-24 14:18:15 894251 --> Output Class Initialized
INFO - 2019-01-24 14:18:15 896334 --> Security Class Initialized
DEBUG - 2019-01-24 14:18:15 898211 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:18:15 898340 --> Input Class Initialized
INFO - 2019-01-24 14:18:15 898956 --> Language Class Initialized
ERROR - 2019-01-24 14:18:15 899954 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-24 14:18:16 499253 --> Config Class Initialized
INFO - 2019-01-24 14:18:16 499404 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:18:16 501224 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:18:16 501338 --> Utf8 Class Initialized
INFO - 2019-01-24 14:18:16 502593 --> URI Class Initialized
INFO - 2019-01-24 14:18:16 505523 --> Router Class Initialized
INFO - 2019-01-24 14:18:16 507550 --> Output Class Initialized
INFO - 2019-01-24 14:18:16 509165 --> Security Class Initialized
DEBUG - 2019-01-24 14:18:16 510576 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:18:16 510687 --> Input Class Initialized
INFO - 2019-01-24 14:18:16 511153 --> Language Class Initialized
ERROR - 2019-01-24 14:18:16 512135 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-24 14:18:16 628977 --> Config Class Initialized
INFO - 2019-01-24 14:18:16 629313 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:18:16 631751 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:18:16 631882 --> Utf8 Class Initialized
INFO - 2019-01-24 14:18:16 633553 --> URI Class Initialized
INFO - 2019-01-24 14:18:16 638169 --> Router Class Initialized
INFO - 2019-01-24 14:18:16 640832 --> Output Class Initialized
INFO - 2019-01-24 14:18:16 642896 --> Security Class Initialized
DEBUG - 2019-01-24 14:18:16 644792 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:18:16 644922 --> Input Class Initialized
INFO - 2019-01-24 14:18:16 645577 --> Language Class Initialized
ERROR - 2019-01-24 14:18:16 646562 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-24 14:18:16 694885 --> Config Class Initialized
INFO - 2019-01-24 14:18:16 695049 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:18:16 698945 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:18:16 699086 --> Utf8 Class Initialized
INFO - 2019-01-24 14:18:16 700404 --> URI Class Initialized
INFO - 2019-01-24 14:18:16 703944 --> Router Class Initialized
INFO - 2019-01-24 14:18:16 706790 --> Output Class Initialized
INFO - 2019-01-24 14:18:16 708784 --> Security Class Initialized
DEBUG - 2019-01-24 14:18:16 711473 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:18:16 711707 --> Input Class Initialized
INFO - 2019-01-24 14:18:16 712800 --> Language Class Initialized
ERROR - 2019-01-24 14:18:16 714478 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-24 14:18:16 809609 --> Config Class Initialized
INFO - 2019-01-24 14:18:16 809775 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:18:16 811979 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:18:16 812123 --> Utf8 Class Initialized
INFO - 2019-01-24 14:18:16 813448 --> URI Class Initialized
INFO - 2019-01-24 14:18:16 819534 --> Router Class Initialized
INFO - 2019-01-24 14:18:16 823604 --> Output Class Initialized
INFO - 2019-01-24 14:18:16 825738 --> Security Class Initialized
DEBUG - 2019-01-24 14:18:16 827801 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:18:16 827939 --> Input Class Initialized
INFO - 2019-01-24 14:18:16 828535 --> Language Class Initialized
ERROR - 2019-01-24 14:18:16 829621 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-24 14:18:16 887865 --> Config Class Initialized
INFO - 2019-01-24 14:18:16 888056 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:18:16 890240 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:18:16 890376 --> Utf8 Class Initialized
INFO - 2019-01-24 14:18:16 892539 --> URI Class Initialized
INFO - 2019-01-24 14:18:16 896193 --> Router Class Initialized
INFO - 2019-01-24 14:18:16 898834 --> Output Class Initialized
INFO - 2019-01-24 14:18:16 900824 --> Security Class Initialized
DEBUG - 2019-01-24 14:18:16 902798 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:18:16 902945 --> Input Class Initialized
INFO - 2019-01-24 14:18:16 903697 --> Language Class Initialized
ERROR - 2019-01-24 14:18:16 904866 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-24 14:18:18 368454 --> Config Class Initialized
INFO - 2019-01-24 14:18:18 368637 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:18:18 371145 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:18:18 371279 --> Utf8 Class Initialized
INFO - 2019-01-24 14:18:18 372169 --> URI Class Initialized
INFO - 2019-01-24 14:18:18 374083 --> Router Class Initialized
INFO - 2019-01-24 14:18:18 375653 --> Output Class Initialized
INFO - 2019-01-24 14:18:18 376852 --> Security Class Initialized
DEBUG - 2019-01-24 14:18:18 377995 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:18:18 378108 --> Input Class Initialized
INFO - 2019-01-24 14:18:18 378895 --> Language Class Initialized
INFO - 2019-01-24 14:18:18 389081 --> Loader Class Initialized
INFO - 2019-01-24 14:18:18 391028 --> Helper loaded: url_helper
INFO - 2019-01-24 14:18:18 391918 --> Helper loaded: utility_helper
INFO - 2019-01-24 19:48:18 400643 --> Database Driver Class Initialized
INFO - 2019-01-24 19:48:18 417464 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-24 19:48:18 418385 --> Controller Class Initialized
INFO - 2019-01-24 19:48:18 419069 --> Final output sent to browser
DEBUG - 2019-01-24 19:48:18 419145 --> Total execution time: 0.0528
INFO - 2019-01-24 14:18:54 248385 --> Config Class Initialized
INFO - 2019-01-24 14:18:54 248769 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:18:54 252075 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:18:54 252234 --> Utf8 Class Initialized
INFO - 2019-01-24 14:18:54 254363 --> URI Class Initialized
INFO - 2019-01-24 14:18:54 260638 --> Router Class Initialized
INFO - 2019-01-24 14:18:54 264492 --> Output Class Initialized
INFO - 2019-01-24 14:18:54 267280 --> Security Class Initialized
DEBUG - 2019-01-24 14:18:54 270004 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:18:54 270160 --> Input Class Initialized
INFO - 2019-01-24 14:18:54 270989 --> Language Class Initialized
INFO - 2019-01-24 14:18:54 274857 --> Loader Class Initialized
INFO - 2019-01-24 14:18:54 276119 --> Helper loaded: url_helper
INFO - 2019-01-24 14:18:54 276675 --> Helper loaded: utility_helper
INFO - 2019-01-24 19:48:54 295819 --> Database Driver Class Initialized
INFO - 2019-01-24 19:48:54 303632 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-24 19:48:54 304984 --> Controller Class Initialized
INFO - 2019-01-24 19:48:54 305605 --> Parser Class Initialized
INFO - 2019-01-24 19:48:54 306658 --> Helper loaded: html_helper
INFO - 2019-01-24 19:48:54 308805 --> Model Class Initialized
INFO - 2019-01-24 19:48:54 311611 --> Model Class Initialized
DEBUG - 2019-01-24 19:48:54 312062 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-24 19:48:54 312763 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-24 19:48:54 313461 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-24 19:48:54 313556 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-24 19:48:54 314522 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-24 19:48:54 315644 --> Helper loaded: file_helper
DEBUG - 2019-01-24 19:48:54 315742 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-24 19:48:54 316293 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 316781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 317251 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 317734 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 318201 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 318674 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 319139 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 319612 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 320089 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 320559 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 321022 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 321532 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 322026 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 322504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 322966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 323429 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 323894 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 324354 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 324826 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 325287 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 325757 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 326217 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 326684 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 327147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 327616 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-24 19:48:54 328161 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2019-01-24 19:48:54 328249 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2019-01-24 19:48:54 328314 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2019-01-24 19:48:54 329843 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 332349 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 333349 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:54 338931 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-24 19:48:54 340105 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-24 19:48:54 345756 --> Final output sent to browser
DEBUG - 2019-01-24 19:48:54 345832 --> Total execution time: 0.0951
INFO - 2019-01-24 14:18:58 762356 --> Config Class Initialized
INFO - 2019-01-24 14:18:58 762480 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:18:58 763809 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:18:58 763887 --> Utf8 Class Initialized
INFO - 2019-01-24 14:18:58 764885 --> URI Class Initialized
INFO - 2019-01-24 14:18:58 768258 --> Router Class Initialized
INFO - 2019-01-24 14:18:58 770673 --> Output Class Initialized
INFO - 2019-01-24 14:18:58 772923 --> Security Class Initialized
DEBUG - 2019-01-24 14:18:58 774488 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:18:58 774594 --> Input Class Initialized
INFO - 2019-01-24 14:18:58 775140 --> Language Class Initialized
INFO - 2019-01-24 14:18:58 779088 --> Loader Class Initialized
INFO - 2019-01-24 14:18:58 779968 --> Helper loaded: url_helper
INFO - 2019-01-24 14:18:58 780514 --> Helper loaded: utility_helper
INFO - 2019-01-24 19:48:58 786493 --> Database Driver Class Initialized
INFO - 2019-01-24 19:48:58 790605 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-24 19:48:58 792100 --> Controller Class Initialized
INFO - 2019-01-24 19:48:58 792759 --> Parser Class Initialized
INFO - 2019-01-24 19:48:58 793498 --> Helper loaded: html_helper
INFO - 2019-01-24 19:48:58 795303 --> Model Class Initialized
DEBUG - 2019-01-24 19:48:58 800025 --> listing_model: getSectorListTesting0120121: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`listing_category` = '10'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 10]
DEBUG - 2019-01-24 19:48:58 808903 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 10]
INFO - 2019-01-24 19:48:58 809961 --> Model Class Initialized
DEBUG - 2019-01-24 19:48:58 810641 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-24 19:48:58 811410 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-24 19:48:58 822825 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-24 19:48:58 824053 --> Helper loaded: file_helper
DEBUG - 2019-01-24 19:48:58 824165 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-24 19:48:58 826770 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 828635 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 836009 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 836569 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 836824 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 838624 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 839046 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 839267 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 840864 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 841272 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 841500 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 843329 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 844038 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 844264 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 845901 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 846677 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 846906 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 848848 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 849869 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 850481 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 852402 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 853297 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 853703 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 856818 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 857656 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 858048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 861104 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 861885 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 862272 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 865339 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 867485 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 868016 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 871222 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-24 19:48:58 873580 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2019-01-24 19:48:58 875279 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 876785 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 877068 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:48:58 879523 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-24 19:48:58 879987 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-24 19:48:58 887969 --> Final output sent to browser
DEBUG - 2019-01-24 19:48:58 888063 --> Total execution time: 0.1193
INFO - 2019-01-24 14:18:59 548569 --> Config Class Initialized
INFO - 2019-01-24 14:18:59 548784 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:18:59 551870 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:18:59 552037 --> Utf8 Class Initialized
INFO - 2019-01-24 14:18:59 553340 --> URI Class Initialized
INFO - 2019-01-24 14:18:59 555392 --> Router Class Initialized
INFO - 2019-01-24 14:18:59 557585 --> Output Class Initialized
INFO - 2019-01-24 14:18:59 559268 --> Security Class Initialized
DEBUG - 2019-01-24 14:18:59 560758 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:18:59 560872 --> Input Class Initialized
INFO - 2019-01-24 14:18:59 561451 --> Language Class Initialized
INFO - 2019-01-24 14:18:59 568264 --> Loader Class Initialized
INFO - 2019-01-24 14:18:59 569545 --> Helper loaded: url_helper
INFO - 2019-01-24 14:18:59 570236 --> Helper loaded: utility_helper
INFO - 2019-01-24 19:48:59 579921 --> Database Driver Class Initialized
INFO - 2019-01-24 19:48:59 587040 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-24 19:48:59 588248 --> Controller Class Initialized
INFO - 2019-01-24 19:48:59 589119 --> Final output sent to browser
DEBUG - 2019-01-24 19:48:59 589246 --> Total execution time: 0.0433
INFO - 2019-01-24 14:19:00 436543 --> Config Class Initialized
INFO - 2019-01-24 14:19:00 437021 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:19:00 443070 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:19:00 443303 --> Utf8 Class Initialized
INFO - 2019-01-24 14:19:00 447401 --> URI Class Initialized
INFO - 2019-01-24 14:19:00 459165 --> Router Class Initialized
INFO - 2019-01-24 14:19:00 460623 --> Output Class Initialized
INFO - 2019-01-24 14:19:00 461612 --> Security Class Initialized
DEBUG - 2019-01-24 14:19:00 462740 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:19:00 462804 --> Input Class Initialized
INFO - 2019-01-24 14:19:00 463100 --> Language Class Initialized
ERROR - 2019-01-24 14:19:00 463599 --> 404 Page Not Found: Browse-sector-list/10
INFO - 2019-01-24 14:19:00 571275 --> Config Class Initialized
INFO - 2019-01-24 14:19:00 571616 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:19:00 575103 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:19:00 575242 --> Utf8 Class Initialized
INFO - 2019-01-24 14:19:00 577555 --> URI Class Initialized
INFO - 2019-01-24 14:19:00 586026 --> Router Class Initialized
INFO - 2019-01-24 14:19:00 590239 --> Output Class Initialized
INFO - 2019-01-24 14:19:00 593410 --> Security Class Initialized
DEBUG - 2019-01-24 14:19:00 596298 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:19:00 596451 --> Input Class Initialized
INFO - 2019-01-24 14:19:00 597263 --> Language Class Initialized
ERROR - 2019-01-24 14:19:00 598601 --> 404 Page Not Found: Browse-sector-list/10
INFO - 2019-01-24 14:19:00 612945 --> Config Class Initialized
INFO - 2019-01-24 14:19:00 613140 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:19:00 616393 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:19:00 616545 --> Utf8 Class Initialized
INFO - 2019-01-24 14:19:00 618566 --> URI Class Initialized
INFO - 2019-01-24 14:19:00 624485 --> Router Class Initialized
INFO - 2019-01-24 14:19:00 628550 --> Output Class Initialized
INFO - 2019-01-24 14:19:00 629764 --> Security Class Initialized
DEBUG - 2019-01-24 14:19:00 630870 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:19:00 630951 --> Input Class Initialized
INFO - 2019-01-24 14:19:00 631308 --> Language Class Initialized
ERROR - 2019-01-24 14:19:00 631896 --> 404 Page Not Found: Browse-sector-list/10
INFO - 2019-01-24 14:19:01 128242 --> Config Class Initialized
INFO - 2019-01-24 14:19:01 128447 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:19:01 133610 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:19:01 133766 --> Utf8 Class Initialized
INFO - 2019-01-24 14:19:01 136661 --> URI Class Initialized
INFO - 2019-01-24 14:19:01 141328 --> Router Class Initialized
INFO - 2019-01-24 14:19:01 144829 --> Output Class Initialized
INFO - 2019-01-24 14:19:01 147191 --> Security Class Initialized
DEBUG - 2019-01-24 14:19:01 149514 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:19:01 149658 --> Input Class Initialized
INFO - 2019-01-24 14:19:01 150335 --> Language Class Initialized
ERROR - 2019-01-24 14:19:01 151474 --> 404 Page Not Found: Browse-sector-list/10
INFO - 2019-01-24 14:19:01 677337 --> Config Class Initialized
INFO - 2019-01-24 14:19:01 677490 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:19:01 679692 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:19:01 679788 --> Utf8 Class Initialized
INFO - 2019-01-24 14:19:01 680938 --> URI Class Initialized
INFO - 2019-01-24 14:19:01 684209 --> Router Class Initialized
INFO - 2019-01-24 14:19:01 686405 --> Output Class Initialized
INFO - 2019-01-24 14:19:01 688214 --> Security Class Initialized
DEBUG - 2019-01-24 14:19:01 690009 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:19:01 690119 --> Input Class Initialized
INFO - 2019-01-24 14:19:01 690674 --> Language Class Initialized
INFO - 2019-01-24 14:19:01 699311 --> Loader Class Initialized
INFO - 2019-01-24 14:19:01 701322 --> Helper loaded: url_helper
INFO - 2019-01-24 14:19:01 702285 --> Helper loaded: utility_helper
INFO - 2019-01-24 19:49:01 713255 --> Database Driver Class Initialized
INFO - 2019-01-24 19:49:01 723337 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-24 19:49:01 724785 --> Controller Class Initialized
INFO - 2019-01-24 19:49:01 725688 --> Final output sent to browser
DEBUG - 2019-01-24 19:49:01 725789 --> Total execution time: 0.0502
INFO - 2019-01-24 14:19:03 886588 --> Config Class Initialized
INFO - 2019-01-24 14:19:03 886682 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:19:03 888706 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:19:03 888777 --> Utf8 Class Initialized
INFO - 2019-01-24 14:19:03 889472 --> URI Class Initialized
INFO - 2019-01-24 14:19:03 891165 --> Router Class Initialized
INFO - 2019-01-24 14:19:03 892688 --> Output Class Initialized
INFO - 2019-01-24 14:19:03 893769 --> Security Class Initialized
DEBUG - 2019-01-24 14:19:03 895359 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:19:03 895445 --> Input Class Initialized
INFO - 2019-01-24 14:19:03 895765 --> Language Class Initialized
ERROR - 2019-01-24 14:19:03 896265 --> 404 Page Not Found: Browse-sector-list/10
INFO - 2019-01-24 14:19:06 656902 --> Config Class Initialized
INFO - 2019-01-24 14:19:06 657166 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:19:06 659017 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:19:06 659115 --> Utf8 Class Initialized
INFO - 2019-01-24 14:19:06 660339 --> URI Class Initialized
INFO - 2019-01-24 14:19:06 663533 --> Router Class Initialized
INFO - 2019-01-24 14:19:06 665558 --> Output Class Initialized
INFO - 2019-01-24 14:19:06 667067 --> Security Class Initialized
DEBUG - 2019-01-24 14:19:06 668489 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:19:06 668589 --> Input Class Initialized
INFO - 2019-01-24 14:19:06 669042 --> Language Class Initialized
INFO - 2019-01-24 14:19:06 672002 --> Loader Class Initialized
INFO - 2019-01-24 14:19:06 673228 --> Helper loaded: url_helper
INFO - 2019-01-24 14:19:06 673902 --> Helper loaded: utility_helper
INFO - 2019-01-24 19:49:06 681724 --> Database Driver Class Initialized
INFO - 2019-01-24 19:49:06 689270 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-24 19:49:06 690388 --> Controller Class Initialized
INFO - 2019-01-24 19:49:06 690963 --> Parser Class Initialized
INFO - 2019-01-24 19:49:06 691802 --> Helper loaded: html_helper
INFO - 2019-01-24 19:49:06 694410 --> Model Class Initialized
INFO - 2019-01-24 19:49:06 698595 --> Model Class Initialized
DEBUG - 2019-01-24 19:49:06 699282 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-24 19:49:06 700227 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-24 19:49:06 701179 --> Severity: Warning --> include(header.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-24 19:49:06 701308 --> Severity: Warning --> include(): Failed opening 'header.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 2
ERROR - 2019-01-24 19:49:06 702681 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-24 19:49:06 704226 --> Helper loaded: file_helper
DEBUG - 2019-01-24 19:49:06 704360 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-24 19:49:06 705188 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 705876 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 706453 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 706975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 707485 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 707981 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 708477 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 708966 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 709459 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 709975 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 710504 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 711005 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 711503 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 712080 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 712665 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 713239 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 713845 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 714445 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 715069 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 715667 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 716238 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 716825 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 717397 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 717987 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 718583 --> Cache class already loaded. Second attempt ignored.
ERROR - 2019-01-24 19:49:06 719249 --> Severity: Warning --> include(footer.php): failed to open stream: No such file or directory /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
ERROR - 2019-01-24 19:49:06 719360 --> Severity: Warning --> include(): Failed opening 'footer.php' for inclusion (include_path='.:/opt/alt/php56/usr/share/pear:/opt/alt/php56/usr/share/php') /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php 102
INFO - 2019-01-24 19:49:06 719460 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/Browse-sector.php
DEBUG - 2019-01-24 19:49:06 721573 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 725197 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 726696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:06 745744 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-24 19:49:06 747451 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-24 19:49:06 753317 --> Final output sent to browser
DEBUG - 2019-01-24 19:49:06 753417 --> Total execution time: 0.0927
INFO - 2019-01-24 14:19:09 809493 --> Config Class Initialized
INFO - 2019-01-24 14:19:09 809752 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:19:09 811569 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:19:09 811666 --> Utf8 Class Initialized
INFO - 2019-01-24 14:19:09 812887 --> URI Class Initialized
INFO - 2019-01-24 14:19:09 816087 --> Router Class Initialized
INFO - 2019-01-24 14:19:09 818073 --> Output Class Initialized
INFO - 2019-01-24 14:19:09 819802 --> Security Class Initialized
DEBUG - 2019-01-24 14:19:09 821345 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:19:09 821484 --> Input Class Initialized
INFO - 2019-01-24 14:19:09 821949 --> Language Class Initialized
INFO - 2019-01-24 14:19:09 824872 --> Loader Class Initialized
INFO - 2019-01-24 14:19:09 826091 --> Helper loaded: url_helper
INFO - 2019-01-24 14:19:09 827344 --> Helper loaded: utility_helper
INFO - 2019-01-24 19:49:09 840810 --> Database Driver Class Initialized
INFO - 2019-01-24 19:49:09 848316 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-24 19:49:09 849416 --> Controller Class Initialized
INFO - 2019-01-24 19:49:09 849965 --> Parser Class Initialized
INFO - 2019-01-24 19:49:09 850796 --> Helper loaded: html_helper
INFO - 2019-01-24 19:49:09 853322 --> Model Class Initialized
DEBUG - 2019-01-24 19:49:09 905437 --> listing_model: getSectorListTesting0120121: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
AND `bd_business_details`.`listing_category` = '16'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 10]
DEBUG - 2019-01-24 19:49:09 911215 --> listing_model: getSectorListTesting: [SELECT `bd_business_details`.`form_id`, `bd_business_details`.`key_headline`, `bd_business_details`.`description`, `bd_business_details`.`listing_category`, `bd_business_details`.`location_country`, `bd_business_details`.`location_city`, `bd_business_details`.`location_state`, `bd_sell_business_details`.`ask_price`, `bd_business_details`.`business_type`, `bd_jv_business_details`.`ask_price` as `askPrice`, `bd_sell_business_details`.`latest_revenu_currency`, `bd_jv_business_details`.`latest_revenu_currency` as `latestRevenu_currency`, `bd_sell_business_details`.`latest_revenu`, `bd_jv_business_details`.`latest_revenu` as `latestRrevenu`, `bd_realestate_business_details`.`price_currency`, `bd_realestate_business_details`.`price_value`, `bd_realestate_business_details`.`price_unit`, `bd_business_documents`.`path`, `bd_jv_business_details`.`investment_required_currency`, `bd_jv_business_details`.`reqd_investment`, `bd_jv_business_details`.`investment_required_unit`, `bd_sell_business_details`.`ask_price_currency`, `bd_sell_business_details`.`ask_price_unit`, `bd_business_details`.`listing_category_other`, `bd_business_details`.`form_type`, `bd_business_details`.`add_to_favorite`, `bd_business_details`.`customer_id`
FROM `bd_business_details`
LEFT JOIN `bd_business_documents` ON `bd_business_documents`.`form_id` = `bd_business_details`.`form_id`
LEFT JOIN `bd_jv_business_details` ON `bd_business_details`.`form_id` = `bd_jv_business_details`.`form_id`
LEFT JOIN `bd_sell_business_details` ON `bd_business_details`.`form_id` = `bd_sell_business_details`.`form_id`
LEFT JOIN `bd_realestate_business_details` ON `bd_business_details`.`form_id` = `bd_realestate_business_details`.`form_id`
WHERE `bd_business_documents`.`document_type` = 'image'
GROUP BY `bd_business_details`.`form_id`
ORDER BY `bd_business_details`.`form_id` DESC
 LIMIT 10]
INFO - 2019-01-24 19:49:09 912477 --> Model Class Initialized
DEBUG - 2019-01-24 19:49:09 913255 --> Last query to get TBL_ADVERTISEMENT list [SELECT *
FROM `bd_advertisements`]
INFO - 2019-01-24 19:49:09 914700 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/header.php
ERROR - 2019-01-24 19:49:09 918745 --> Cache: Failed to initialize APC; extension not loaded/enabled?
INFO - 2019-01-24 19:49:09 921425 --> Helper loaded: file_helper
DEBUG - 2019-01-24 19:49:09 921622 --> Cache adapter "apc" is unavailable. Falling back to "file" backup adapter.
DEBUG - 2019-01-24 19:49:09 925698 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 927464 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 939361 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 940346 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 940805 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 944549 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 945878 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 946341 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 949942 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 950683 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 951330 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 955255 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 956147 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 956557 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 960187 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 961555 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 962182 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 965877 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 966672 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 967272 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 971230 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 972222 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 972659 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 976489 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 977859 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 978379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 982322 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 983124 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 983925 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 988152 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 990516 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 991254 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 995101 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 997863 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 998732 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:09 999156 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:10 003503 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:10 004631 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:10 005801 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:10 007303 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:10 007781 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:10 011742 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:10 012696 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:10 014379 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:10 015232 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:10 015724 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:10 020572 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:10 021382 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-24 19:49:10 023017 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/browse-sector-list.php
DEBUG - 2019-01-24 19:49:10 026839 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:10 029048 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:10 029752 --> Cache class already loaded. Second attempt ignored.
DEBUG - 2019-01-24 19:49:10 033955 --> Cache class already loaded. Second attempt ignored.
INFO - 2019-01-24 19:49:10 034730 --> File loaded: /home/hzswn06npic1/public_html/bdeals/application/views/include/footer.php
INFO - 2019-01-24 19:49:10 045146 --> Final output sent to browser
DEBUG - 2019-01-24 19:49:10 045365 --> Total execution time: 0.2282
INFO - 2019-01-24 14:19:10 618607 --> Config Class Initialized
INFO - 2019-01-24 14:19:10 618769 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:19:10 622054 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:19:10 622186 --> Utf8 Class Initialized
INFO - 2019-01-24 14:19:10 623521 --> URI Class Initialized
INFO - 2019-01-24 14:19:10 627063 --> Router Class Initialized
INFO - 2019-01-24 14:19:10 629491 --> Output Class Initialized
INFO - 2019-01-24 14:19:10 631867 --> Security Class Initialized
DEBUG - 2019-01-24 14:19:10 633562 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:19:10 633692 --> Input Class Initialized
INFO - 2019-01-24 14:19:10 634390 --> Language Class Initialized
ERROR - 2019-01-24 14:19:10 635323 --> 404 Page Not Found: Browse-sector-list/16
INFO - 2019-01-24 14:19:10 701348 --> Config Class Initialized
INFO - 2019-01-24 14:19:10 701517 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:19:10 703804 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:19:10 703977 --> Utf8 Class Initialized
INFO - 2019-01-24 14:19:10 706024 --> URI Class Initialized
INFO - 2019-01-24 14:19:10 710205 --> Router Class Initialized
INFO - 2019-01-24 14:19:10 713850 --> Output Class Initialized
INFO - 2019-01-24 14:19:10 716955 --> Security Class Initialized
DEBUG - 2019-01-24 14:19:10 719882 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:19:10 720065 --> Input Class Initialized
INFO - 2019-01-24 14:19:10 720954 --> Language Class Initialized
ERROR - 2019-01-24 14:19:10 722356 --> 404 Page Not Found: Browse-sector-list/16
INFO - 2019-01-24 14:19:10 793958 --> Config Class Initialized
INFO - 2019-01-24 14:19:10 794049 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:19:10 795149 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:19:10 795216 --> Utf8 Class Initialized
INFO - 2019-01-24 14:19:10 795882 --> URI Class Initialized
INFO - 2019-01-24 14:19:10 797482 --> Router Class Initialized
INFO - 2019-01-24 14:19:10 798696 --> Output Class Initialized
INFO - 2019-01-24 14:19:10 799644 --> Security Class Initialized
DEBUG - 2019-01-24 14:19:10 800524 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:19:10 800590 --> Input Class Initialized
INFO - 2019-01-24 14:19:10 800878 --> Language Class Initialized
ERROR - 2019-01-24 14:19:10 801337 --> 404 Page Not Found: Browse-sector-list/16
INFO - 2019-01-24 14:19:11 731929 --> Config Class Initialized
INFO - 2019-01-24 14:19:11 732088 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:19:11 734194 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:19:11 734323 --> Utf8 Class Initialized
INFO - 2019-01-24 14:19:11 735641 --> URI Class Initialized
INFO - 2019-01-24 14:19:11 738739 --> Router Class Initialized
INFO - 2019-01-24 14:19:11 741075 --> Output Class Initialized
INFO - 2019-01-24 14:19:11 742918 --> Security Class Initialized
DEBUG - 2019-01-24 14:19:11 745001 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:19:11 745146 --> Input Class Initialized
INFO - 2019-01-24 14:19:11 745750 --> Language Class Initialized
ERROR - 2019-01-24 14:19:11 746665 --> 404 Page Not Found: Uploads/gauravgmail.com
INFO - 2019-01-24 14:19:11 784282 --> Config Class Initialized
INFO - 2019-01-24 14:19:11 784452 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:19:11 786555 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:19:11 786684 --> Utf8 Class Initialized
INFO - 2019-01-24 14:19:11 787935 --> URI Class Initialized
INFO - 2019-01-24 14:19:11 790257 --> Router Class Initialized
INFO - 2019-01-24 14:19:11 793080 --> Output Class Initialized
INFO - 2019-01-24 14:19:11 794919 --> Security Class Initialized
DEBUG - 2019-01-24 14:19:11 796747 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:19:11 796993 --> Input Class Initialized
INFO - 2019-01-24 14:19:11 797758 --> Language Class Initialized
INFO - 2019-01-24 14:19:11 805285 --> Loader Class Initialized
INFO - 2019-01-24 14:19:11 807054 --> Helper loaded: url_helper
INFO - 2019-01-24 14:19:11 807871 --> Helper loaded: utility_helper
INFO - 2019-01-24 19:49:11 820653 --> Database Driver Class Initialized
INFO - 2019-01-24 19:49:11 828489 --> Session: Class initialized using 'files' driver.
INFO - 2019-01-24 19:49:11 830640 --> Controller Class Initialized
INFO - 2019-01-24 19:49:11 831543 --> Final output sent to browser
DEBUG - 2019-01-24 19:49:11 831650 --> Total execution time: 0.0491
INFO - 2019-01-24 14:19:13 103045 --> Config Class Initialized
INFO - 2019-01-24 14:19:13 103282 --> Hooks Class Initialized
DEBUG - 2019-01-24 14:19:13 104935 --> UTF-8 Support Enabled
INFO - 2019-01-24 14:19:13 105025 --> Utf8 Class Initialized
INFO - 2019-01-24 14:19:13 106144 --> URI Class Initialized
INFO - 2019-01-24 14:19:13 109263 --> Router Class Initialized
INFO - 2019-01-24 14:19:13 111076 --> Output Class Initialized
INFO - 2019-01-24 14:19:13 112423 --> Security Class Initialized
DEBUG - 2019-01-24 14:19:13 113707 --> Global POST, GET and COOKIE data sanitized
INFO - 2019-01-24 14:19:13 113795 --> Input Class Initialized
INFO - 2019-01-24 14:19:13 114204 --> Language Class Initialized
ERROR - 2019-01-24 14:19:13 114883 --> 404 Page Not Found: Browse-sector-list/16
