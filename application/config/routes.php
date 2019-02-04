<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = 'home';
//$route['featured-listing/(:any)/(:any)'] = 'home/viewAll/$1/$2';

$route['userprofile'] = 'user/customerprofile';
$route['register-otp'] = 'user/registerOtp';
$route['recent-listing'] = 'user/recentListing';
$route['user_business_profile'] = 'user/userBusinessProfile';
$route['login-business-profile-form/(:any)/(:any)/(:any)/(:any)'] = 'user/userBusinessProfileForm/$1/$2/$3/$4';

$route['buy-userregister-profile'] = 'user/userProfileCreateProfile';

$route['userprofile-jv'] = 'userjv/customerprofile';
$route['user_business_profile-jv'] = 'userjv/userBusinessProfile';
$route['login-business-profile-form-jv/(:any)/(:any)/(:any)/(:any)'] = 'user/userBusinessProfileJvForm/$1/$2/$3/$4';
$route['login-business-profile-form-buy/(:any)/(:any)/(:any)/(:any)'] = 'user/userBusinessProfileBuyForm/$1/$2/$3/$4';
$route['login-business-profile-form-startup/(:any)/(:any)/(:any)/(:any)'] = 'user/userBusinessProfileStartupForm/$1/$2/$3/$4';


$route['seller_edit/(:any)'] = 'sellabusiness/seller_edit/$1';
$route['admin/currency_explore/(:any)'] = 'admin/currency/currency_explore/$1';
$route['admin/currency_edit/(:any)'] = 'admin/currency/currency_edit/$1';
$route['seller_edit_jv/(:any)'] = 'jointventures/seller_edit/$1';
$route['seller_edit_buy/(:any)'] = 'buyer/seller_edit/$1';
$route['seller_edit_su/(:any)'] = 'startup/seller_edit/$1';
$route['user_query'] = 'user/userQueryBrowse';
$route['user-contact-us-details'] = 'user/UserContactDetails';
$route['user-query-explore/(:any)'] = 'user/userQueryExplore/$1';
$route['user-contact-explore/(:any)'] = 'user/userContactExplore/$1';
$route['invoice-payment'] = 'user/InvoicePayment';
$route['user_query_details/(:any)'] = 'user/userQueryDetails/$1';
$route['user_contacts/(:any)/(:num)'] = 'user/userContactBrowse/$1/$2';
#$route['user_contacts_explor/(:any)'] = 'user/getUserContactInfo/$1';
$route['user-favourite'] = 'user/getUserFavourite';


$route['userregister'] = 'user/newregistration';
$route['edit-user-profile'] = 'user/editUserProfile';
$route['validateCustomer'] = 'login';
$route['loginAsUser'] = 'login/LoginAsUser';
$route['logout'] = 'login/logout';
$route['forget-password'] = 'login/forgetPassword';
$route['forgetUseridOtp'] = 'login/forgetUseridOtp';
$route['call-captcha'] = 'user/callCaptcha';
$route['verify-captcha'] = 'user/verify_captcha';

/*Routes For Buy A Business Tab Links*/
$route['buy-a-business'] = 'buyer/userProfile';
$route['buy-a-business-new-form'] = 'buyer/setNewForm';
$route['buy-a-business-profile/(:any)/(:any)'] = 'buyer/businessProfile/$1/$2';
$route['buy-a-business-post-requirement'] = 'buyer/businessPostRequirement';
$route['browse-by-sector'] = 'buyer/browseBySector';
$route['register'] = 'user/register';
$route['register-facebook'] = 'user/registerFacebook';
$route['steps-buy-business'] = 'buyer/stepBuyBusiness';
$route['industry-alerts'] = 'buyer/industryAlerts';

$route['buy-userregister'] = 'buyer/userProfileCreate';
#$route['buy-userregister-profile'] = 'buyer/userProfileCreateProfile';

/*Routes For Sell A Business Tab Links*/
$route['list-your-business-new-form'] = 'sellabusiness/setNewForm';
$route['list-your-business-user-profile'] = 'sellabusiness/userProfile';
$route['list-your-business-basic-information'] = 'sellabusiness/basicInformation';
$route['list-your-business-description'] = 'sellabusiness/businessDescription';
$route['list-your-business-additional-details'] = 'sellabusiness/businessAdditionalDetails';
$route['list-your-business-additional-details-uploads'] = 'sellabusiness/businessAdditionalDetailsUpload';
$route['list-your-business-package-details'] = 'sellabusiness/packageDetails';
$route['list-your-business-additional-services'] = 'sellabusiness/businessAdditionalServices';
$route['list-your-business-payment'] = 'sellabusiness/payment';
$route['list-your-business-preview'] = 'sellabusiness/preview';

$route['steps-sell-business'] = 'sellabusiness/stepSellBusiness';
$route['business-services'] = 'sellabusiness/businessServices';

$route['lb_userregister'] = 'sellabusiness/userProfileCreate';


/*Routes For Joint Venture Tab Links*/
$route['list-your-business-new-form-jv'] = 'jointventures/setNewForm';
$route['list-your-business-user-profile-jv'] = 'jointventures/userProfile';
$route['list-your-business-basic-information-jv'] = 'jointventures/basicInformation';
$route['list-your-business-description-jv'] = 'jointventures/businessDescription';
$route['list-your-business-additional-details-jv'] = 'jointventures/businessAdditionalDetails';
$route['list-your-business-additional-details-uploads-jv'] = 'jointventures/businessAdditionalDetailsUpload';
$route['list-your-business-jv-details-jv'] = 'jointventures/jvDetails';
$route['list-your-business-package-details-jv'] = 'jointventures/packageDetails';
$route['list-your-business-additional-services-jv'] = 'jointventures/businessAdditionalServices';
$route['list-your-business-payment-jv'] = 'jointventures/payment';
$route['list-your-business-preview-jv'] = 'jointventures/preview';

$route['steps-jv'] = 'jointventures/stepsJv';
$route['benefits-jv'] = 'jointventures/benefitsJv';

$route['jv_userregister'] = 'jointventures/userProfileCreate';

/*Routes For StartUps Tab Links*/
$route['start-up-user-profile-new'] = 'startup/setNewForm';
$route['start-up-user-profile'] = 'startup/userProfile';
$route['start-up-basic-information'] = 'startup/basicInformation';
$route['start-up-business-pitch'] = 'startup/businessPitch';
$route['start-up-deal-details'] = 'startup/dealDetails';
$route['start-up-additional-details-uploads'] = 'startup/businessAdditionalDetailsUpload';
$route['start-up-package-details'] = 'startup/packageDetails';
$route['start-up-additional-services'] = 'startup/businessAdditionalServices';
$route['start-up-payment'] = 'startup/payment';
$route['start-up-preview'] = 'startup/preview';



$route['steps-start-up'] = 'startup/stepStartUp';
$route['business-idea'] = 'startup/businessIdea';

$route['startup_userregister'] = 'startup/userProfileCreate';


$route['real-estate-user-profile-new'] = 'realestate/setNewForm';
$route['real-estate-user-profile'] = 'realestate/userProfile';
$route['real-estate-basic-information'] = 'realestate/basicInformation';
$route['real-estate-tenancy-description'] = 'realestate/tenancyDescription';
$route['real-estate-tenancy-details'] = 'realestate/tenancyDetails';

$route['realestate_userregister'] = 'realestate/userProfileCreate';




/*Conatct routes*/
$route['contact-us']='contact/index';
$route['set-contact-us']='contact/setContactDetails';

/*Search routes*/
$route['advance-search']='search/advanceSearch';
$route['advance-search/(:num)']='search/advanceSearch/$1';

$route['normal-search']='search/normalSearch';
$route['normal-search/(:num)']='search/normalSearch/$1';

/*adv_search/sortby/country/state/city/sector/price/limit/page
//$route['adv_search/(:any)/(:num)/(:num)/(:num)/(:any)/(:num)/(:num)/(:num)']='search/advanceSearch/$1/$2/$3/$4/$5/$6/$7/$8';
	//$route['nrm_search/(:any)/(:num)/(:num)/(:num)/(:any)/(:num)/(:num)/(:num)']='search/normalSearch/$1/$2/$3/$4/$5/$6/$7/$8';*/


$route['browse-sector-listing-details/(:any)/(:any)']='listingdetails/getListingDetails/$1/$2';



$route['customer-listing-contact-form']='listingcontact/contactForm';

$route['ajxsfc'] = 'location/getState';
$route['ajxsfrc'] = 'location/getRState';
$route['ajxsfcat'] = 'location/getCatSub';
$route['ajxcfs'] = 'location/getCities';
$route['ajxcfr'] = 'location/getRegionState';
$route['ajxuiq'] = 'user/userQuery';

/* Routes for Admin user */
$route['admin/index'] = 'admin/home';
$route['admin/logout'] = 'admin/login/logout';
$route['admin/seller_explore/(:any)/(:any)/(:any)/(:any)'] = 'admin/seller/seller_explore/$1/$2/$3/$4';
$route['admin/seller_edit/(:any)'] = 'admin/seller/seller_edit/$1';
$route['admin/upload'] = 'admin/seller/userProfileCreate';
$route['admin/jv_explore/(:any)/(:any)/(:any)/(:any)'] = 'admin/jv/seller_explore/$1/$2/$3/$4';
$route['admin/jv_edit/(:any)'] = 'admin/jv/seller_edit/$1';
$route['admin/upload-jv'] = 'admin/jv/userProfileCreate';

$route['admin/buy_explore/(:any)/(:any)/(:any)/(:any)'] = 'admin/buy/buyer_explore/$1/$2/$3/$4';
$route['admin/buy_edit/(:any)'] = 'admin/buy/seller_edit/$1';
#$route['admin/upload-jv'] = 'admin/jv/userProfileCreate';
$route['admin-buy-userregister-profile'] = 'admin/buy/userProfileCreateProfile';



#$route['admin/expl_assign/(:any)/(:any)/(:any)'] = 'admin/assign/index/$1/$2/$3';
$route['admin/expl_accept/(:any)/(:any)/(:any)'] = 'admin/assign/businessAction/$1/$2/$3';
$route['admin/assign'] = 'admin/assign/assignCase';
$route['admin/expl_case/(:any)/(:any)/(:any)'] = 'admin/cases/index/$1/$2/$3';
$route['admin/expl_startup_case/(:any)/(:any)/(:any)'] = 'admin/cases/StartUpindex/$1/$2/$3';
$route['admin/expl_jv_case/(:any)/(:any)/(:any)'] = 'admin/cases/jvCase/$1/$2/$3';
$route['admin/createJvcase'] = 'admin/cases/createJvcase';
$route['admin/newuser_case/(:any)/(:any)/(:any)'] = 'admin/cases/NewUserCase/$1/$2/$3';
$route['admin/newquery_case/(:any)/(:any)/(:any)'] = 'admin/cases/NewQueryCase/$1/$2/$3';
$route['admin/createcase'] = 'admin/cases/createCase';
$route['admin/createStartupcase'] = 'admin/cases/createStartupcase';
$route['admin/createUserCase'] = 'admin/cases/createUserCase';
$route['admin/createQueryCase'] = 'admin/cases/createQueryCase';

$route['admin/newuser'] = 'admin/users';
$route['admin/newuser_explore/(:any)'] = 'admin/users/user_explore/$1';
$route['admin/newuser_assign/(:any)'] = 'admin/users/user_assign/$1';
$route['admin/newuser_reject/(:any)'] = 'admin/users/user_reject/$1';

$route['admin/edituser'] = 'admin/users/editUser';
$route['admin/alluser'] = 'admin/users/allusers';
$route['admin/alluser_explore/(:any)'] = 'admin/users/alluser_explore/$1';

$route['admin/alluser_assign/(:any)'] = 'admin/users/user_assign/$1';
$route['admin/alluser_reject/(:any)'] = 'admin/users/user_reject/$1';
$route['admin/user/assign'] = 'admin/assign/assignUser';
$route['admin/user/reject'] = 'admin/users/rejectUser';
$route['admin/employee'] = 'admin/employee';
$route['admin/employee/add'] = 'admin/employee/addEmployee';
$route['admin/employee/employee_work_report/(:any)'] = 'admin/employee/EmployeeWorkReport/$1';
$route['admin/currency'] = 'admin/currency';
$route['admin/currency/add'] = 'admin/currency/addCurrency';



$route['admin/newquery'] = 'admin/users/newQuery';
$route['admin/newSingleQuery/(:any)'] = 'admin/users/newSingleQuery/$1';
$route['admin/getQueryCity'] = 'admin/users/getQueryCity';
$route['admin/newquery_explore/(:any)'] = 'admin/users/query_explore/$1';
$route['admin/singleuserquery/(:any)'] = 'admin/users/newSingleQuery/$1';
$route['admin/queries_rejected_reason/(:any)'] = 'admin/users/Rejected_query_explore/$1';
$route['admin/user_rejected_reason/(:any)'] = 'admin/users/Rejected_user_explore/$1';
$route['admin/queries_assigned_details/(:any)'] = 'admin/users/Assigned_query_explore/$1';
$route['admin/user_assigned_details/(:any)'] = 'admin/users/Assigned_user_explore/$1';
$route['admin/newquery_assign/(:any)'] = 'admin/users/query_assign/$1';
$route['admin/newquery_reject/(:any)'] = 'admin/users/query_reject/$1';
$route['admin/user-form-case-details/(:any)'] = 'admin/users/userFormCase/$1';


$route['admin/editquery'] = 'admin/users/editQuery';
$route['admin/allquery'] = 'admin/users/allqueries';

$route['admin/query/assign'] = 'admin/assign/assignQuery';
$route['admin/query/reject'] = 'admin/users/rejectQuery';



/*********new url*********/
$route['admin/UserReport'] = 'admin/users/UserReport';
$route['admin/QueryReport'] = 'admin/users/QueryReport';
$route['admin/BusinessSellUser/(:any)'] = 'admin/users/BusinessSellUser/$1';
$route['admin/newquery_explore_user/(:any)'] = 'admin/users/query_explore_user/$1';
$route['admin/query_case_user/(:any)/(:any)/(:any)/(:any)'] = 'admin/cases/NewQueryCaseUser/$1/$2/$3/$4';
$route['admin/createQueryUserCase/(:any)'] = 'admin/cases/createQueryUserCase/$1';
$route['admin/newquery_assign_user/(:any)/(:any)'] = 'admin/users/query_assign_user/$1/$2';
$route['admin/query/assign_user/(:any)'] = 'admin/assign/assignCaseUser/$1';
$route['admin/newquery_reject_user/(:any)/(:any)'] = 'admin/users/query_reject_user/$1/$2';
$route['admin/query/reject_user/(:any)'] = 'admin/users/rejectQueryUser/$1';
$route['admin/newuser_add'] = 'admin/users/addNewUser';

/*****************new url from 02-aug-2018**************/
$route['admin/user_reassign/(:any)'] = 'admin/users/UserReassign/$1';
$route['admin/reassign'] = 'admin/assign/ReassignUser';

$route['admin/newquery_reassign/(:any)'] = 'admin/users/query_reassign/$1';
$route['admin/query/reassign'] = 'admin/assign/reassignQuery';
$route['admin/QueryfollowupReport/(:any)/(:any)/(:any)'] = 'admin/users/QueryfollowupReport/$1/$2/$3';

/**********************08-aug-2018********************/

$route['admin/contactquery'] = 'admin/users/ContactQuery';
$route['admin/newcontact_explore/(:any)'] = 'admin/users/Contact_explore/$1';
$route['admin/newcontact_assign/(:any)'] = 'admin/users/contact_assign/$1';
$route['admin/contact/assign'] = 'admin/assign/contactQuery';

/*************************09-aug-2018*******************/

$route['admin/newcontact_reject/(:any)'] = 'admin/users/contact_reject/$1';
$route['admin/contact/reject'] = 'admin/users/rejectContact';
$route['admin/editcontact'] = 'admin/users/editContact';
$route['admin/contact_assigned_details/(:any)'] = 'admin/users/Assigned_contact_explore/$1';
$route['admin/contact_rejected_reason/(:any)'] = 'admin/users/Rejected_contact_explore/$1';
$route['admin/ContactReport'] = 'admin/users/ContactReport';
$route['admin/newcontact_reassign/(:any)'] = 'admin/users/contact_reassign/$1';
$route['admin/contact/reassign'] = 'admin/assign/reassignContact';

/*************************10-aug-2018*******************/
$route['admin-buy-userregister-profile-update'] = 'admin/buy/UpdateBuyerForm';

/*************************13-aug-2018***********************/
$route['admin/seller/UpdateSeller'] = 'admin/seller/UpdateAdminSellerForm';

/************************16-aug-2018****************************/
$route['admin/buyer_case/(:any)/(:any)/(:any)'] = 'admin/cases/buyer/$1/$2/$3';
$route['admin/createBuyercase'] = 'admin/cases/createBuyercase';
$route['admin/buyer_accept/(:any)/(:any)/(:any)'] = 'admin/assign/BuyerActionAccept/$1/$2/$3';

/*************************16-aug-2018***********************/
$route['admin/seller/UpdateJVForm'] = 'admin/seller/UpdateAdminJVForm';

/*************************23-aug-2018****************************/
$route['admin/loginAsUser'] = 'admin/login/index';

/*************************27-aug-2018****************************/

$route['admin/startup'] = 'admin/startup/index';
$route['admin/startup_explore/(:any)/(:any)/(:any)/(:any)'] = 'admin/startup/startup_explore/$1/$2/$3/$4';


$route['Browse-sector'] = 'home/BrowseSector';
$route['browse-sector-list/(:any)/(:any)/(:any)'] = 'home/browseList/$1/$2/$3';

/**********************sep-2018**********************************/
$route['admin/propertytags'] = 'admin/Propertytags';
$route['admin/propertytags/add'] = 'admin/Propertytags/addTags';
$route['admin/tag_explore/(:any)'] = 'admin/Propertytags/tag_explore/$1';
$route['admin/tag_edit/(:any)'] = 'admin/Propertytags/tag_edit/$1';

$route['admin/country'] = 'admin/Country';
$route['admin/country/add'] = 'admin/country/addCountry';
$route['admin/country_explore/(:any)'] = 'admin/Country/country_explore/$1';
$route['admin/country_edit/(:any)'] = 'admin/Country/country_edit/$1';

$route['admin/state'] = 'admin/State';
$route['admin/state/add'] = 'admin/state/addState';
$route['admin/state_explore/(:any)'] = 'admin/State/state_explore/$1';
$route['admin/state_edit/(:any)'] = 'admin/State/state_edit/$1';

$route['admin/sector'] = 'admin/Sector';
$route['admin/sub-sector'] = 'admin/Sector/Subindex';
$route['admin/sector/add'] = 'admin/sector/addSector';
$route['admin/sector/subadd'] = 'admin/sector/addsubSector';
$route['admin/sector_explore/(:any)'] = 'admin/Sector/sector_explore/$1';
$route['admin/sub_sector_explore/(:any)'] = 'admin/Sector/sub_sector_explore/$1';
$route['admin/sector_edit/(:any)'] = 'admin/Sector/sector_edit/$1';
$route['admin/sub_sector_edit/(:any)'] = 'admin/Sector/sub_sector_edit/$1';

$route['admin/testimonials'] = 'admin/testimonials';
$route['admin/testimonials/add'] = 'admin/testimonials/addTestimonials';
$route['admin/testimonials_explore/(:any)'] = 'admin/testimonials/testimonials_explore/$1';
$route['admin/testimonials_edit/(:any)'] = 'admin/testimonials/testimonials_edit/$1';

$route['admin/startup/UpdateStartup'] = 'admin/startup/UpdateStartupForm';

$route['admin/realestate/UpdateRealestate'] = 'admin/realestate/UpdateRealestateForm';
$route['admin/realestate'] = 'admin/realestate/index';
$route['admin/realestate_explore/(:any)/(:any)/(:any)/(:any)'] = 'admin/realestate/realestate_explore/$1/$2/$3/$4';
$route['admin/expl_realestate_case/(:any)/(:any)/(:any)'] = 'admin/cases/Realestateindex/$1/$2/$3';
$route['admin/createRealestatecase'] = 'admin/cases/createRealestatecase';


$route['sell-business-preview-form'] = 'sellabusiness/SellBusinessPreview';
$route['list-your-business-preview-jv'] = 'Jointventures/JVBusinessPreview';

$route['start-up-preview'] = 'startup/startUpPreview';

$route['login-business-profile-form-re/(:any)/(:any)/(:any)/(:any)'] = 'user/userBusinessProfileReForm/$1/$2/$3/$4';

$route['re_edit_form/(:any)'] = 'realestate/re_edit/$1';

$route['re-business-preview'] = 'realestate/RePreview';

//$route['admin/Seller/UpdateSellerState'] = 'admin/Seller/UpdateSellerState';

$route['my-listing'] = 'user/Getmylisting';
$route['change-password'] = 'user/Changepassword';

//region
$route['admin/region'] = 'admin/Country/viewregion';
$route['admin/region/add'] = 'admin/country/addregion';
$route['admin/region_explore/(:any)'] = 'admin/Country/region_explore/$1';
$route['admin/region_edit/(:any)'] = 'admin/Country/region_edit/$1';

//advertisement 

$route['admin/advertisements'] = 'admin/advertisements/AdvtIndex';
$route['admin/advertisement/add'] = 'admin/advertisements/addAdvertisement';
$route['admin/advertisement_explore/(:any)'] = 'admin/advertisements/advertisement_explore/$1';
$route['admin/advertisement_edit/(:any)'] = 'admin/advertisements/advertisement_edit/$1';

$route['browse-buyer-listing/(:any)'] = 'buyer/browseBuyerListing/$1';

$route['browse-buyer-listing'] = 'buyer/browseBuyerListing';

$route['admin/SellReport'] = 'admin/seller/SellReport';
$route['admin/REReport'] = 'admin/realestate/REReport';
$route['admin/JVReport'] = 'admin/jv/JVReport';
$route['admin/StartUpReport'] = 'admin/startup/StartUpReport';

$route['admin/admin-comment/(:any)'] = 'admin/cases/Admincomment/$1';
$route['admin/adminCaseComment/(:any)'] = 'admin/cases/adminCaseComment/$1';
