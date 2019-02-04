<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


/**
 * User defined constants
 */

defined('FILE_ICONS') OR define('FILE_ICONS',serialize(array( 'xls'=>'images/excel-icon.jpg', 'xlsx'=>'images/excel-icon.jpg', 'doc'=>'images/word-icon.png', 'docx'=>'images/word-icon.png', 'pdf'=>'images/pdf-icon.png' )));

defined('CURRENCY') OR define('CURRENCY', 'Rs');
defined('CACHE_KEY_PREFIX') OR define('CACHE_KEY_PREFIX', 'bd_');
defined('CACHE_REFRESH_TIME') OR define('CACHE_REFRESH_TIME', 1);
defined('DIFF_FROM_CURRENT_YEAR') OR define('DIFF_FROM_CURRENT_YEAR', 50);

defined('CATEGORIES') OR define('CATEGORIES', serialize(array('Industry'=>'Industry','Agriculture'=>'Agriculture','IT'=>'IT','Manufacturing'=>'Manufacturing','Software'=>'Software')));

defined('PROPERTY_TYPE') OR define('PROPERTY_TYPE', serialize(array('Commercial Building'=>'Commercial Building','Commercial Flats'=>'Commercial Flats','Industrial Building'=>'Industrial Building','Institutional Property'=>'Institutional Property','Shops - Showrooms'=>'Shops - Showrooms','Hotels and Resorts'=>'Hotels and Resorts','IT Parks - SEZ'=>'IT Parks - SEZ','Warehouses - Godown'=>'Warehouses - Godown','Restaurant - Banquet'=>'Restaurant - Banquet','Others'=>'Others')));

defined('SUB_CATEGORIES') OR define('SUB_CATEGORIES', serialize(array( 'Industry'=>'Industry','Agriculture'=>'Agriculture','IT'=>'IT','Manufacturing'=>'Manufacturing','Software'=>'Software' ) ) );

defined('LEGAL_ENTITIES') OR define('LEGAL_ENTITIES', serialize(array('Proprietorship'=> 'Proprietorship', 'Partnership-LLP'=>'Partnership-LLP', 'Private Limited'=>'Private Limited', 'Public Limited'=> 'Public Limited')));

defined('LEGAL_ENTITIES_JV') OR define('LEGAL_ENTITIES_JV', serialize(array( 'Proprietorship'=> 'Proprietorship', 'Partnership-LLP'=> 'Partnership-LLP', 'Private Limited'=>'Private Limited','Public Limited'=> 'Public Limited')));

defined('BUSINESS_CURRENT_STATUS') OR define('BUSINESS_CURRENT_STATUS', serialize(array('Pre-Startup'=>'Pre-Startup', 'Ready-to-Launch'=>'Ready-to-Launch', 'Running'=>'Running','Other'=>'Other')));

defined('BUSINESS_CURRENT_STATUS_JV') OR define('BUSINESS_CURRENT_STATUS_JV', serialize(array('Running Profitable'=>'Running Profitable', 'Loss Making'=>'Loss Making', 'Closed'=>'Closed','Bank Stressed'=>'Bank Stressed','Other'=>'Other')));

defined('BUSINESS_CURRENT_STATUS_SELL') OR define('BUSINESS_CURRENT_STATUS_SELL', serialize(array('Running Profitable'=>'Running Profitable', 'Loss Making'=>'Loss Making', 'Closed'=>'Closed','Bank Stressed'=>'Bank Stressed','Running'=>'Running','Other'=>'Other')));

defined('BUY_INVEST_IN') OR define('BUY_INVEST_IN', serialize(array(''=>'Select','Running Business'=>'Running Business', 'Stressed Unit'=>'Stressed Unit', 'NPA'=>'NPA', 'Startup'=>'Startup','Real Estate'=>'Real Estate', 'Others'=>'Others')));

defined('INVESTMENT_TIMELINE') OR define('INVESTMENT_TIMELINE', serialize(array(''=>'Select','1-3 Months'=>'1-3 Months', '3-6 Months'=>'3-6 Months', '6-9 Months'=>'6-9 Months','9-12 Months'=>'9-12 Months','More than one year'=>'More than one year')));

defined('CATEGORY_lISTING') OR define('CATEGORY_lISTING', serialize(array(''=>'Select','Category1'=>'Category1', 'Category2'=>'Category2', 'Category3'=>'Category3','Category4'=>'Category4','Category5'=>'Category5')));

defined('LOCATIONS') OR define('LOCATIONS', serialize(array(''=>'Select','LOCATION1'=>'LOCATION1', 'LOCATION2'=>'LOCATION2', 'LOCATION3'=>'LOCATION3','LOCATION4'=>'LOCATION4','LOCATION5'=>'LOCATION5')));

defined('BUSINESS_PREFERENCE') OR define('BUSINESS_PREFERENCE', serialize(array(''=>'Select','With Assets'=>'With Assets', 'Without Assets'=>'Without Assets')));

defined('BUSINESS_LISTED_BY') OR define('BUSINESS_LISTED_BY', serialize(array('Management'=>'Management','Business Owner'=>'Business Owner', 'Business Broker'=>'Business Broker', 'Representative'=>'Representative')));

defined('PRICES') OR define('PRICES',serialize(array(''=>'Price Range','Upto 50 Lac'=>'Upto 50 Lac','50 Lac to 1 cr'=>'50 Lac to 1 cr','1 Cr to 3 cr'=>'1 Cr to 3 cr','3 Cr to 6 cr'=>'3 Cr to 6 cr','6 Cr to 10 cr'=>'6 Cr to 10 cr','10 Cr to 15 cr'=>'10 Cr to 15 cr','15 Cr to 25 cr'=>'15 Cr to 25 cr','25 Cr to 40 cr'=>'25 Cr to 40 cr','40 Cr to 60 cr'=>'40 Cr to 60 cr','60 Cr to 90 cr'=>'60 Cr to 90 cr','90 Cr to 125 cr'=>'90 Cr to 125 cr','125 cr and above'=>'125 cr and above','Upto​ $100 thousand'=>'Upto​ $100 thousand','$100 thousand to $300​ ​thousand'=>'$100 thousand to $300​ ​thousand','$300​ ​thousand to $600​ ​thousand'=>'$300​ ​thousand to $600​ ​thousand','$600 ​thousand to​ $​1​ million'=>'$600 ​thousand to​ $​1​ million','$1 million to to 3 million'=>'$1 million to to 3 million','$3 million to 6 million'=>'$3 million to 6 million','$6 million to $10 million'=>'$6 million to $10 million','$10 million to $20 million'=>'$10 million to $20 million','$20 million to $50 million'=>'$20 million to $50 million','$50​ ​million to $100 million'=>'$50​ ​million to $100 million','$100 million & above'=>'$100 million & above')));

defined('PRICESFILTER') OR define('PRICESFILTER',serialize(array(''=>'Price Range','Upto 50 Lac'=>'Upto 50 Lac','50 Lac to 1 cr'=>'50 Lac to 1 cr','1 Cr to 3 cr'=>'1 Cr to 3 cr','3 Cr to 6 cr'=>'3 Cr to 6 cr','6 Cr to 10 cr'=>'6 Cr to 10 cr','10 Cr to 15 cr'=>'10 Cr to 15 cr','15 Cr to 25 cr'=>'15 Cr to 25 cr','25 Cr to 40 cr'=>'25 Cr to 40 cr','40 Cr to 60 cr'=>'40 Cr to 60 cr','60 Cr to 90 cr'=>'60 Cr to 90 cr','90 Cr to 125 cr'=>'90 Cr to 125 cr','125 cr and above'=>'125 cr and above')));

define('CATEGORIES') OR define('CATEGORIES', serialize(array('Select'=>'Select','IT'=>'IT','Agriculture'=>'Agriculture','Manufacturing'=>'Manufacturing','Real  Estate'=>'Real Estate'))); 


defined('PRICES_COMPARE_INR') OR define('PRICES_COMPARE_INR',serialize(array('1,5000000'=>'Upto 50 Lac','5000001,10000000'=>'50 Lac to 1 cr','10000001,30000000'=>'1 Cr to 3 cr','30000001,60000000'=>'3 Cr to 6 cr','60000001,100000000'=>'6 Cr to 10 cr','100000001,150000000'=>'10 Cr to 15 cr','150000001,250000000'=>'15 Cr to 25 cr','250000001,400000000'=>'25 Cr to 40 cr','400000001,600000000'=>'40 Cr to 60 cr','600000001,900000000'=>'60 Cr to 90 cr','900000001,1250000000'=>'90 Cr to 125 cr','1250000001,9990000001'=>'125 cr and above')));


defined('PRICES_COMPARE_USD') OR define('PRICES_COMPARE_USD',serialize(array('1,100000'=>'Upto​ $100 thousand','100001,300000'=>'$100 thousand to $300​ ​thousand','$300001,600000'=>'$300​ ​thousand to $600​ ​thousand','600001,1000000'=>'$600 ​thousand to​ $​1​ million','1000001,3000000'=>'$1 million to to 3 million','3000001,6000000'=>'$3 million to 6 million','6000001,10000000'=>'$6 million to $10 million','10000001,20000000'=>'$10 million to $20 million','20000001,50000000'=>'$20 million to $50 million','50000001,100000000'=>'$50​ ​million to $100 million','100000001,9990000001'=>'$100 million & above')));

defined('COUNTRY_CODE') OR define('COUNTRY_CODE', serialize(array('+91'=>'+91','+61'=>'+61','-'=>'-')));
defined('BUSINESS_RE_LOCATABLE') OR define('BUSINESS_RE_LOCATABLE', serialize(array('Y'=>'Yes', 'N'=>'No')));
defined('PROPERTY_TYPE') OR define('PROPERTY_TYPE', serialize(array('Owner'=>'Owned', 'Leased'=>'Leased')));
defined('PROPERTY_TYPE_SELL') OR define('PROPERTY_TYPE_SELL', serialize(array('Owner'=>'Owned', 'Leased'=>'Leased')));
defined('PROPERTY_AREA') OR define('PROPERTY_AREA', serialize(array('Industrial'=>'Industrial', 'Commercial'=>'Commercial')));
defined('PRICE_UNITS') OR define('PRICE_UNITS', serialize(array('₹'=>'₹', '$'=>'$')));
defined('PRICE_UNITS_INR') OR define('PRICE_UNITS_INR', serialize(array('THOUSANDS'=>'Thousand','LACS'=>'Lacs','CRORES'=>'Crores')));
defined('PRICE_UNITS_USD') OR define('PRICE_UNITS_USD', serialize(array('THOUSANDS'=>'Thousand','MILLIONS'=>'Millions','BILLIONS'=>'Billions')));
defined('AREA_UNITS') OR define('AREA_UNITS', serialize(array('sqft'=>'sqft', 'sqmt'=>'sqmt', 'acre'=>'acre')));

defined('AREA_UNITS_LAND') OR define('AREA_UNITS_LAND', serialize(array('sqft'=>'sqft', 'sqmt'=>'sqmt', 'acre'=>'acre')));

defined('ITEM_PER_PAGE_COUNT') OR define('ITEM_PER_PAGE_COUNT', serialize(array(1=>1, 2=>2, 3=>3, 4=>4, 5=>5, 6=>6, 7=>7, 8=>8, 9=>9, 10=>10, 15=>15, 20=>20, 30=>30, 40=>40, 50=>50, 60=>60, 70=>70, 80=>80, 90=>90, 100=>100)));
defined('ITEM_SORT_BY_OPTIONS') OR define('ITEM_SORT_BY_OPTIONS', serialize(array('added_date desc'=>'New Deal Added/Updated', 'asking_price asc'=>'Asking Price: Lowest First', 'asking_price desc'=>'Asking Price: Highest First', 'total_revenue asc'=>'Revenue: Lowest First', 'total_revenue desc'=>'Revenue: Highest First','added_date:<:7'=>'7 Days Old Deal', 'added_date:<:15'=>'15 Days Old Deal', 'added_date:<:90'=>'90 Days Old Deal')));
defined('ASSIGN_STATUS') OR define('ASSIGN_STATUS', serialize(array('Pending'=>'Pending', 'Assigned'=>'Assigned', 'Cancelled'=>'Cancelled', 'Done'=>'Done')));
defined('CASE_STATUS') OR define('CASE_STATUS', serialize(array('Assigned'=>'Assigned', 'Reject'=>'Reject')));

define('INVESTMENT_REQUIRED_AS') OR define('INVESTMENT_REQUIRED_AS', serialize(array('Seed Funding'=>'Seed Funding', 'Angel Investment'=>'Angel Investment', 'VC'=>'VC','PE'=>'PE','Venture Captalist'=>'Venture Captalist','Private Equity'=>'Private Equity', 'Others'=>'Others')));

define('PURPOSE_INVESTMENT') OR define('PURPOSE_INVESTMENT', serialize(array('Working Capital'=>'Working Capital', 'Debt Refinance'=>'Debt Refinance', 'R&D Marketing'=>'R&D Marketing','Expansion'=>'Expansion')));



defined('TBL_PREFIX') OR define('TBL_PREFIX', 'bd_');
defined('TBL_CUSTOMER_DETAILS') OR define('TBL_CUSTOMER_DETAILS', 'customer_details');
defined('TBL_COUNTRY') OR define('TBL_COUNTRY', 'country_list');
defined('TBL_COUNTRY_STATE') OR define('TBL_COUNTRY_STATE', 'country_state_mapping');
defined('TBL_STATE_CITY') OR define('TBL_STATE_CITY', 'state_city_mapping');
defined('TBL_USER_QUERY') OR define('TBL_USER_QUERY', 'user_query_info');
defined('TBL_BUSINESS_DETAILS') OR define('TBL_BUSINESS_DETAILS', 'business_details');
defined('TBL_SELL_BUSINESS_DETAILS') OR define('TBL_SELL_BUSINESS_DETAILS', 'sell_business_details');
defined('TBL_JV_BUSINESS_DETAILS') OR define('TBL_JV_BUSINESS_DETAILS', 'jv_business_details');
defined('TBL_STARTUP_BUSINESS_DETAILS') OR define('TBL_STARTUP_BUSINESS_DETAILS', 'startup_business_details');
defined('TBL_REALESTATE_BUSINESS_DETAILS') OR define('TBL_REALESTATE_BUSINESS_DETAILS', 'realestate_business_details');
defined('TBL_PACKAGE') OR define('TBL_PACKAGE','package');
defined('TBL_CUSTOMER_PACKAGE') OR define('TBL_CUSTOMER_PACKAGE','customer_package');
defined('TBL_CUSTOMER_ADDITIONAL_SERVICES') OR define('TBL_CUSTOMER_ADDITIONAL_SERVICES','customer_additional_services');
defined('TBL_BUSINESS_DOCUMENTS') OR define('TBL_BUSINESS_DOCUMENTS', 'business_documents');
defined('TBL_ADDITIONAL_DETAILS') OR define('TBL_ADDITIONAL_DETAILS', 'additional_details');
defined('TBL_ADDITIONAL_FINANCIAL_DETAILS') OR define('TBL_ADDITIONAL_FINANCIAL_DETAILS', 'additional_financial_details');
defined('TBL_USERS') OR define('TBL_USERS', 'users');
defined('TBL_CASE_RESPONSIBILITY') OR define('TBL_CASE_RESPONSIBILITY', 'case_responsibility');
defined('TBL_CASE_HISTORY') OR define('TBL_CASE_HISTORY', 'case_history');
defined('TBL_EMPLOYEE') OR define('TBL_EMPLOYEE','employee');
defined('TBL_CUSTOMER_RESPONSIBILITY') OR define('TBL_CUSTOMER_RESPONSIBILITY', 'customer_responsibility');
defined('TBL_QUERY_RESPONSIBILITY') OR define('TBL_QUERY_RESPONSIBILITY', 'query_responsibility');
defined('TBL_LISTING_CONTACTS') OR define('TBL_LISTING_CONTACTS', 'listing_contacts');
defined('TBL_CURRENCY') OR define('TBL_CURRENCY', 'currency');
defined('TBL_BUY_BUSINESS_DATA') OR define('TBL_BUY_BUSINESS_DATA', 'buy_business_data');
defined('TBL_BUY_BUSINESS_DETAILS') OR define('TBL_BUY_BUSINESS_DETAILS', 'buy_business_details');
defined('TBL_CONTACT_US_DETAIL') OR define('TBL_CONTACT_US_DETAIL', 'contact_us_detail');

/********new tables 02-aug-2018*************/
defined('TBL_CUSTOMER_RESPONSIBILITY_PREVIOUS') OR define('TBL_CUSTOMER_RESPONSIBILITY_PREVIOUS', 'customer_responsibility_previous');
defined('TBL_QUERY_RESPONSIBILITY_PREVIOUS') OR define('TBL_QUERY_RESPONSIBILITY_PREVIOUS', 'query_responsibility_previous');

/********new tables 08-aug-2018*************/
defined('TBL_CONTACT_RESPONSIBILITY') OR define('TBL_CONTACT_RESPONSIBILITY', 'contact_responsibility');
defined('TBL_CONTACT_RESPONSIBILITY_PREVIOUS') OR define('TBL_CONTACT_RESPONSIBILITY_PREVIOUS', 'contact_responsibility_previous');

/********new tables 05-Sep-2018*************/
defined('TBL_PROPERTY_TAGS') OR define('TBL_PROPERTY_TAGS', 'property_tags');

defined('TBL_SECTOR') OR define('TBL_SECTOR', 'sector_list');
defined('TBL_TESTIMONIALS') OR define('TBL_TESTIMONIALS', 'testimonials');
defined('TBL_REGION_LIST') OR define('TBL_REGION_LIST', 'region_list');
defined('TBL_SUB_SECTOR_LIST') OR define('TBL_SUB_SECTOR_LIST', 'sub_sector_list');
defined('TBL_PROPERTY_FAVORITE') OR define('TBL_PROPERTY_FAVORITE', 'property_favorite');
defined('TBL_PROPERTY_VIEW_USER') OR define('TBL_PROPERTY_VIEW_USER', 'property_view_user');
defined('TBL_ADVERTISEMENT') OR define('TBL_ADVERTISEMENT', 'advertisements');
defined('TBL_MAIL_SETTINGS') OR define('TBL_MAIL_SETTINGS', 'mail_settings');
defined('TBL_USER_REGISTER_OTP') OR define('TBL_USER_REGISTER_OTP', 'user_register_otp');