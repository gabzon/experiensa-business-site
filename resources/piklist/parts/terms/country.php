<?php
/**
 * Title: More info
 * Taxonomy: exp_country
 */

piklist(
	'field',
	[
		'type'    => 'text',
		'field'   => 'exp_country_name_french',
		'label'   => 'French',
		'columns' => 12,
	]
);

piklist(
	'field',
	[
		'type'    => 'text',
		'field'   => 'exp_country_name_spanish',
		'label'   => 'Spanish',
		'columns' => 12,
	]
);


piklist(
	'field',
	[
		'type'    => 'text',
		'field'   => 'exp_country_name_italian',
		'label'   => 'Italian',
		'columns' => 12,
	]
);

piklist(
	'field',
	[
		'type'    => 'text',
		'field'   => 'exp_country_name_german',
		'label'   => 'German',
		'columns' => 12,
	]
);

piklist(
	'field',
	[
		'type'    => 'text',
		'field'   => 'exp_country_currency',
		'label'   => 'Currency',
		'columns' => 3,
	]
);

piklist(
	'field',
	[
		'type'    => 'text',
		'field'   => 'exp_country_alpha2code',
		'label'   => 'Code 2 letters',
		'columns' => 2,
	]
);

piklist(
	'field',
	[
		'type'    => 'text',
		'field'   => 'exp_country_alpha3code',
		'label'   => 'Code 3 letters',
		'columns' => 2,
	]
);

piklist(
	'field',
	[
		'type'    => 'text',
		'field'   => 'exp_country_flag',
		'label'   => 'Flag',
		'columns' => 12,
	]
);

piklist(
	'field',
	[
		'type'    => 'text',
		'field'   => 'exp_country_google_id',
		'label'   => 'Google ID',
		'columns' => 12,
	]
);

piklist(
	'field',
	[
		'type'    => 'text',
		'field'   => 'exp_country_phone_code',
		'label'   => 'Phone code',
		'columns' => 2,
	]
);

piklist(
	'field',
	[
		'type'    => 'text',
		'field'   => 'exp_country_website',
		'label'   => 'Website',
		'columns' => 12,

	]
);

piklist(
	'field',
	[
		'type'    => 'text',
		'field'   => 'exp_country_media_website',
		'label'   => 'Media Website',
		'columns' => 12,

	]
);

piklist(
	'field',
	[
		'type'    => 'text',
		'field'   => 'exp_country_restcountries',
		'label'   => 'Restcountries',
		'columns' => 12,

	]
);

piklist(
	'field',
	array(
		'type' => 'checkbox',
		'scope' => 'taxonomy',
		'field' => 'exp_country_languages',
		'label' => 'Languages',		
		'choices' => piklist(
			get_terms(
				array(
					'taxonomy' => 'exp_spoken_languages',
					'hide_empty' => false,
				)
			),
			array( 'term_id', 'name' )
		),
	)
);

piklist(
	'field',
	array(
		'type' => 'checkbox',
		'scope' => 'taxonomy',
		'field' => 'exp_country_world_region',
		'label' => 'World Region',
		'choices' => piklist(
			get_terms(
				array(
					'taxonomy' => 'exp_world_region',
					'hide_empty' => false,
				)
			),
			array( 'term_id', 'name' )
		),
	)
);
