<?php

/**
 * civixero.ContactPull API specification (optional)
 * This is used for documentation and validation.
 *
 * @param array $spec description of fields supported by this API call
 * @return void
 * @see http://wiki.civicrm.org/confluence/display/CRM/API+Architecture+Standards
 */
function _civicrm_api3_civixero_invoicepush_spec(&$spec) {
  $spec['start_date'] = array(
    'api.default' => 'yesterday',
    'type' => CRM_Utils_Type::T_DATE,
    'name' => 'start_date',
    'title' => 'Sync Start Date',
    'description' => 'date to start pushing from',
  );
}

/**
 * civixero.ContactPull API
 *
 * @param array $params
 * @return array API result descriptor
 * @see civicrm_api3_create_success
 * @see civicrm_api3_create_error
 * @throws API_Exception
 */
function civicrm_api3_civixero_invoicepush($params) {
  $xero = new CRM_Civixero_Invoice();
  $xero->push($params);
}

