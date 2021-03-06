<?php


/*
tle: Media
Post Type: exp_client
*/

piklist('field', [
  'type'      => 'text',
  'field'     => 'exp_client_email',
  'label'     => 'Email',
  'columns'   => 8,
  'validate'  => [['type' => 'email']],
  'required'  => true,
  'sanitize' => [['type' => 'email']],
]);

piklist('field', [
  'type'    => 'text',
  'field'   => 'exp_client_phone',
  'label'   => 'Phone number',
  'columns' => 6,
]);

piklist('field', [
  'type'    => 'text',
  'field'   => 'exp_client_website',
  'label'   => 'Website',
  'columns' => 12,
]);

piklist('field', [
  'type'      => 'textarea',
  'field'     => 'exp_client_google_maps',
  'label'     => 'Google Maps',
  'columns'   => 12,
]);

piklist('field', [
  'type'      => 'number',
  'field'     => 'exp_client_number_employees',
  'label'     => 'Number of Employees',
  'columns'   => 2,
]);

piklist('field', [
  'type'      => 'select',
  'field'     => 'exp_client_branches',
  'value'     => 'No',
  'label'     => 'Branches',
  'columns'   => 3,
  'choices'   => ['No' => 'No', 'Yes' => 'Yes']
]);

piklist('field', [
  'type'      => 'number',
  'field'     => 'exp_client_number_branches',
  'label'     => 'Number of Branches',
  'conditions' => [['field' => 'exp_client_branches' ,'value' => 'Yes']],
  'columns'   => 2,
]);

piklist('field', [
  'type'    => 'checkbox',
  'field'   => 'exp_client_has_insurance',
  'label'   => 'Has insurance?',
  'value'   => 'no',
  'choices' => [
    'yes'    => 'yes',
  ],
  'columns' => 4,
]);


piklist('field', [
  'type'    => 'checkbox',
  'field'   => 'exp_client_has_newsletter',
  'label'   => 'Has Newsletters?',
  'value'   => 'no',
  'choices' => [
    'yes'    => 'yes',
  ],
  'columns' => 4,
]);

piklist('field', array(
  'type' => 'datepicker',
  'field' => 'exp_client_opening_date',
  'label' => 'Opening date',
  'options' => array('dateFormat' => 'yy/mm/dd')
));

piklist('field', array(
  'type' => 'group',
  'label' => __('Address', 'sage'),
  'list' => false,
  'description' => __('Travel agency address, for the geopoint please visit <a href="https://www.latlong.net/" target="_blank">https://www.latlong.net/</a>', 'sage'),
  'fields' => array(
    array(
      'type' => 'select',
      'field' => 'exp_client_country',
      'label' => __('Country', 'sage'),
      'columns' => 3,
      'choices' => App::country_list(),
    ),
    array(
      'type' => 'text',
      'field' => 'exp_client_state',
      'label' => __('State', 'sage'),
      'columns' => 3,
    ),
    array(
      'type' => 'text',
      'field' => 'exp_client_postal_code',
      'label' => __('NPA', 'sage'),
      'columns' => 2,
      'attributes' => ['placeholder' => 'Postal Code'],
    ),
    array(
      'type' => 'text',
      'field' => 'exp_client_city',
      'label' => __('City', 'piklist-demo'),
      'columns' => 4,
      'attributes' => ['placeholder' => 'ex: Geneva'],
    ),
    array(
      'type' => 'text',
      'field' => 'exp_client_address',
      'label' => __('Street Address', 'sage'),
      'required' => true,
      'columns' => 12,
      'attributes' => ['placeholder' => 'ex: Rue du Mont Blanc 12']
    ),
    array(
      'type' => 'text',
      'field' => 'exp_client_latitude',
      'label' => __('Latitude', 'sage'),
      'columns' => 6,
    ),
    array(
      'type' => 'text',
      'field' => 'exp_client_longitude',
      'label' => __('Longitude', 'sage'),
      'columns' => 6,
    ),
  )
));

piklist('field', array (
  'type'    => 'radio',
  'field'   => 'exp_client_status',
  'value'   => 'none',
  'label'   => 'Status',
  'choices' => array(
    'experiensa'  => 'Experiensa',
    'listo'       => 'Listo',
    'exp-listo'   => 'Experiensa + Listo',
    'none'        => 'None',
    'bankrupt'    => 'Bankrupt'
  )
));


piklist('field', [
  'type'    => 'select',
  'field'   => 'exp_client_type',
  'label'   => 'Type of client',
  'value'   => 'agency',
  'choices' => [
    'agency'    => 'Travel Agency',
    'operator'  => 'Tour Operator',
  ],
  'columns' => 6,
]);

piklist('field', array(
  'type' => 'group',
  'label' => __('Offers information', 'sage'),
  'list' => false,
  'description' => __('Tour operator offers information ', 'sage'),
  'conditions' => [['field' => 'exp_client_type' ,'value' => 'operator']],
  'fields' => array(
    array(
      'type'    => 'select',
      'field'   => 'exp_client_source_type',
      'value'   => 'none',
      'label'   => 'Source Type',
      'choices' => [
        'newsletters' => 'Newsletters',
        'website'     => "Website's catalog",
        'source'      => 'other source',
        ],
        'columns' => 12,
      ),
      array(
        'type'    => 'text',
        'field'   => 'exp_client_source',
        'label'   => 'Source',
        'columns' => 12,
      ),
      array(
        'type'    => 'text',
        'field'   => 'exp_client_official_website',
        'label'   => 'Catalog',
        'columns' => 12,
      ),
    )
  )
);

piklist('field', array(
  'type' => 'group',
  'label' => __('Contact information', 'sage'),
  'field' => 'exp_client_contact',
  'list' => false,
  'add_more' => true,
  'fields' => array(
    array(
      'type'      => 'text',
      'field'     => 'exp_client_contact_person',
      'label'     => 'Person of contact',
      'required'  => false,
      'columns'   => 9,
      'attributes' => ['placeholder' => 'Full Name'],
    ),
    array(
      'type'      => 'select',
      'field'     => 'exp_client_contact_type',
      'label'     => 'Contact Type',
      'required'  => false,
      'columns'   => 3,
      'choices'   => ['Owner' => 'Owner', 'Director' => 'Director', 'Agent' => 'Agent'],
    ),
    array(
      'type'      => 'text',
      'field'     => 'exp_client_contact_email',
      'label'     => 'Contact Email',
      'required'  => false,
      'columns'   => 6,
      'attributes' => ['placeholder' => 'ex: gabriel@experiensa.com'],
    ),
    array(
      'type'      => 'text',
      'field'     => 'exp_client_contact_phone',
      'label'     => 'Contact Phone',
      'required'  => false,
      'columns'   => 6,
      'attributes' => ['placeholder' => 'ex: +41 79 222 3333'],
    ),
  )
));

piklist('field', array(
  'type' => 'group',
  'label' => __('Social Media', 'sage'),
  'list' => false,
  'fields' => array(
    array(
      'type'      => 'text',
      'field'     => 'exp_client_facebook',
      'label'     => 'Facebook',
      'columns'   => 12,
    ),
    array(
      'type'      => 'text',
      'field'     => 'exp_client_twitter',
      'label'     => 'Twitter',
      'columns'   => 12,
    ),
    array(
      'type'      => 'text',
      'field'     => 'exp_client_instagram',
      'label'     => 'Instagram',
      'columns'   => 12,
    ),
    array(
      'type'      => 'text',
      'field'     => 'exp_client_youtube',
      'label'     => 'Youtube',
      'columns'   => 12,
    ),
    array(
      'type'      => 'text',
      'field'     => 'exp_client_pinterest',
      'label'     => 'Pinterest',
      'columns'   => 12,
    ),
    array(
      'type'      => 'text',
      'field'     => 'exp_client_snapchat',
      'label'     => 'Snapchat',
      'columns'   => 12,
    ),
    array(
      'type'      => 'text',
      'field'     => 'exp_client_skype',
      'label'     => 'Skype',
      'columns'   => 12,
    ),
    array(
      'type'      => 'text',
      'field'     => 'exp_client_blog',
      'label'     => 'Blog',
      'columns'   => 12,
    ),
    array(
      'type'      => 'text',
      'field'     => 'exp_client_linkedin',
      'label'     => 'Linkedin',
      'columns'   => 12,
    ),
  )
));

piklist('field', [
  'type'        => 'text',
  'label'       => 'Appbase ID',
  'field'       => 'exp_client_appbase_id',
  'attributes'  => ['readonly' => 'readonly'],
  'columns'     => 12,
]);

?>
