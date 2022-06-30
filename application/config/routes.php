<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// default
$route['default_controller']= 'Chome';
$route['home']				= 'Chome';

// hệ thống
$route['login']				= 'hethong/Cloginadmin';
$route['logout']			= 'hethong/Cloginadmin';
// $route['userInfo']			= 'hethong/CuserInfo';
// $route['editInfo']			= 'hethong/CuserInfo/edit';
// $route['changePassword']	= 'hethong/Cchangepassword';
$route['insertExcel']       = 'hethong/CinsertExcel';
$route['excelFilesManager'] = 'hethong/CexcelFilesManager';
$route['summaryStudent']    = 'hethong/CsummaryStudent';
$route['summaryStudent/(:num)']  = 'hethong/CsummaryStudent';

// phòng
$route['recordManager']		    = 'phong/CrecordManager';
$route['recordManager/(:num)']  = 'phong/CrecordManager';
$route['facultyManager']		= 'phong/CfacultyManager';
// $route['editUser']				= 'phong/CfacultyManager/edit';
$route['graduationPeriod']		= 'phong/CgraduationPeriod';
$route['graduationSummary']		= 'phong/CgraduationSummary';
// $route['deleteUser/(:num)']		= 'phong/CfacultyManager/delete/$1'; //
// $route['studentManager']   		= 'phong/CstudentManager';
// $route['studentManager/(:num)']	= 'phong/CstudentManager/fetch_data/$1';

$route['confirmGraduate']		= 'phong/CconfirmGraduate';
$route['confirmGraduate/(:num)']= 'phong/CconfirmGraduate/fetch_data/$1';
$route['importListGraStu']		= 'phong/CimportListGraStu';
$route['sentBack']              = 'phong/CsentBack';
$route['studentScope']		    = 'phong/CstudentScope';
$route['importStudentScope']		= 'phong/CimportStudentScope';
$route['importStudentScope/uploadFile']	= 'phong/CimportStudentScope/UploadFile';
// khoa
$route['manageFile']	        = 'khoa/CmanageFile';
$route['manageFile/(:num)']	    = 'khoa/CmanageFile';

$route['eligibleStudents']		= 'khoa/CeligibleStudents';
$route['previewScore']		    = 'khoa/CpreviewScore';
$route['addEligibleStudents']	= 'khoa/CaddEligibleStudents';
$route['addEligibleStudents/uploadFile']	= 'khoa/CaddEligibleStudents/UploadFile';
$route['addStudentScore']		= 'khoa/CaddStudentScore';
$route['addStudentScore/uploadFile']	= 'khoa/CaddStudentScore/UploadFile';
//sv & dvdt & cac phong
$route['addRecord']			    = 'sinhvien/CaddRecord';
$route['addRecord/uploadMC_AJAX']	= 'sinhvien/CaddRecord/UploadMC_AJAX';
$route['addRecord/GetLD']	= 'sinhvien/CaddRecord/GetLD';

// $route['demoXuatExcel'] = 'CdemoXuatExcel';



$route['404_override']			= '';
$route['403']			        = 'error/error_403';
$route['translate_uri_dashes']	= FALSE;
