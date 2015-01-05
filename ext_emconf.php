<?php

########################################################################
# Extension Manager/Repository config file for ext: "sz_ebook"
#
# Auto generated by Extension Builder 2014-06-02
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'eBook',
	'description' => 'Converts PDF\'s to eBook, using turn.js, based on Extbase and Fluid. Works with Tablets and Smartphones.',
	'category' => 'plugin',
	'author' => 'Dennis Römmich',
	'author_email' => 'dennis.roemmich@sunzinet.com',
	'author_company' => 'sunzinet AG',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => '1',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.1.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3',
			'fluid' => '1.3',
			'typo3' => '4.5.0-6.2.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

?>