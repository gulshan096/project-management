<?php
defined('BASEPATH') OR exit('No direct script access allowed');


    $route['default_controller'] = 'welcome';
    $route['404_override'] = '';
    $route['translate_uri_dashes'] = FALSE;

// Admin section--------------------

	//All users authentication 

	$route['login']              =  'auth/account/login';
    $route['auth/logout']        =  'auth/account/logout';

    // Dashboard
	$route['admin/home']          =  'admin/home/index'; 
	$route['admin/attendance']    =  'admin/home/attendance';

    
    // Create Employee

    $route['admin/employee']      =  'admin/employee/employee/0';
    $route['admin/employee_edit/(:any)']      =  'admin/employee/employee/$1';

     
    // Create user
 
    $route['admin/user']                        =  'admin/user/user/0';
    $route['admin/user_edit/(:any)']            =  'admin/user/user/$1';

    // Create Indirect code

    $route['admin/indirect-code']               =  'admin/indirectcode/indirectcode/0';
    $route['admin/edit_indirect_code/(:any)']   =  'admin/indirectcode/indirectcode/$1';

    // Create Break
    $route['admin/break']                      =  'admin/BreakController/break/0';
    $route['admin/edit_break/(:any)']          =  'admin/BreakController/break/$1';
	
	// Attendance
	
	
	// Resources
	$route['admin/resources']                  =  'admin/ResourceController/resources/0';
	$route['admin/edit_resources/(:any)']      =  'admin/ResourceController/resources/$1';

	// Unit Measures

	$route['admin/measures']                   =   'admin/MeasuresController/measure/0';
	$route['admin/edit_measures/(:any)']       =   'admin/MeasuresController/measure/$1';



// Planner section---------------------


    //Dashboard
    $route['planner/home']                         =  'planner/home/index';
    
	//project
    $route['planner/project']                      =  'planner/project/project/0';
    // $route['planner/project_edit/(:any)']       =  'planner/project/project/$1';
    
	//work order
    $route['planner/work-order']                   =  'planner/workorder/workOrder/0';
    // $route['planner/work-order/(:any)']         =  'planner/workorder/workOrder/$1';
    
	//resource work ordwe
    $route['planner/resource-work-order']          =  'planner/ResourceWorkOrder/resourceworkorder/0';
	$route['planner/resource-work-order/(:any)']   =  'planner/ResourceWorkOrder/resourceworkorder/$1';
	
	//Report
	$route['planner/unreleased-project']           =   'planner/Report/unreleased';
	$route['planner/released-project']             =   'planner/Report/released';
	$route['planner/cancel-project']               =   'planner/Report/cancel';
	$route['planner/closed-project']               =   'planner/Report/closed';


// Production section------------------

    //Dashboard
    $route['production/home']                      =  'production/home/index';
	
	//project
    $route['production/project']                   =  'production/project/project';
	
	
	//work order
    $route['production/work-order']                =    'production/workorder/workOrder';


    
	//resource work ordwe
     $route['production/resource-work-order']      =  'production/ResourceWorkOrder/resourceworkorder';
	
	
	// Report
	$route['production/released-project']          =   'production/Report/released';
	$route['production/unreleased-project']        =   'production/Report/unreleased';
	$route['production/cancel-project']            =   'production/Report/cancel';
	$route['production/closed-project']            =   'production/Report/closed';
    


// Super Admin section-----------------


    //Dashboard
    $route['superadmin/home']                      =  'superadmin/home/index';
	
	//Cancel
	$route['superadmin/cancel']                    =  'superadmin/Cancel/cancel';
	$route['superadmin/cancel/ca-project']         =  'superadmin/Cancel/cancelProject';
	$route['superadmin/cancel/ca-work-order']      =  'superadmin/Cancel/cancelWorkOrder';
	$route['superadmin/cancel/ca-resource']        =  'superadmin/Cancel/cancelResource';
	
	//Close
	$route['superadmin/close']                     =  'superadmin/Closed/close';
	$route['superadmin/close/cl-project']          =  'superadmin/Closed/closeProject';
	$route['superadmin/close/cl-work-order']       =  'superadmin/Closed/closeWorkOrder';
	$route['superadmin/close/cl-resource']         =  'superadmin/Closed/closeResource';
	
	
	//Labour ticket

