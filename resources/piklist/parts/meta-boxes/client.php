<?php
/*
Title: Media
Post Type: exp_client
*/

piklist('field', [
  'type'    => 'text',
  'field'   => 'exp_client_website',
  'label'   => 'Website',
  'columns' => 12,
]);

piklist('field', [
  'type'    => 'text',
  'field'   => 'exp_client_email',
  'label'   => 'Email',
  'columns' => 8,
]);

piklist('field', [
  'type'    => 'text',
  'field'   => 'exp_client_phone',
  'label'   => 'Phone number',
  'columns' => 6,
]);

piklist('field', [
  'type'    => 'select',
  'field'   => 'exp_client_type',
  'label'   => 'Type of client',
  'choices' => [
    'agency'    => 'Travel Agency',
    'operator'  => 'Tour Operator',
  ],
  'columns' => 6,
]);

piklist('field', [
  'type'    => 'text',
  'field'   => 'exp_client_source_type',
  'label'   => 'Source Type',
  'columns' => 6,
]);

piklist('field', [
  'type'    => 'text',
  'field'   => 'exp_client_source',
  'label'   => 'Source',
  'columns' => 12,
]);

?>
