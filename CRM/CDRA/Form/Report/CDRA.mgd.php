<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'CRM_CDRA_Form_Report_CDRA',
    'entity' => 'ReportTemplate',
    'params' => 
    array (
      'version' => 3,
      'label' => 'Comprehensive Donor Revenue Analysis Report',
      'description' => 'CRM_CDRA_Report_Form_CDRA (biz.jmaconsulting.cdrareport)',
      'class_name' => 'CRM_CDRA_Form_Report_CDRA',
      'report_url' => 'cdra',
      'component' => 'CiviContribute',
    ),
  ),
);