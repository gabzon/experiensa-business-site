<?php
/**
 * Title: More info
 * Taxonomy: exp_destination
 */

piklist(
	'field',
	[
		'type'    => 'text',
		'field'   => 'exp_destination_name_french',
		'label'   => 'French',
		'columns' => 12,
	]
);

piklist(
	'field',
	[
		'type'    => 'text',
		'field'   => 'exp_destination_name_spanish',
		'label'   => 'Spanish',
		'columns' => 12,
	]
);


piklist(
	'field',
	[
		'type'    => 'text',
		'field'   => 'exp_destination_name_italian',
		'label'   => 'Italian',
		'columns' => 12,
	]
);

piklist(
	'field',
	[
		'type'    => 'text',
		'field'   => 'exp_destination_name_german',
		'label'   => 'German',
		'columns' => 12,
	]
);

piklist(
	'field',
	[
		'type'    => 'text',
		'field'   => 'exp_destination_google_id',
		'label'   => 'Google ID',
		'columns' => 12,
	]
);

piklist(
	'field',
	[
		'type'    => 'text',
		'field'   => 'exp_destination_website',
		'label'   => 'Website',
		'columns' => 12,

	]
);

piklist(
	'field',
	[
		'type'    => 'text',
		'field'   => 'exp_destination_media_website',
		'label'   => 'Media Website',
		'columns' => 12,

	]
);


piklist(
	'field',
	array(
		'type' => 'select',
		'field' => 'exp_destination_country',
		'label' => 'Country',
		'choices' => [ '' => 'Choose a country' ] + piklist(
			get_terms(
				array(
					'taxonomy' => 'exp_country',
					'hide_empty' => false,
				)
			),
			array( 'term_id', 'name' )
		),
	)
);

piklist(
	'field',
	[
		'type' => 'file',
		'field' => 'exp_destination_photos',
		'label' => 'Photos',
	]
);
