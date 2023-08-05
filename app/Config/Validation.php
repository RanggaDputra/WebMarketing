<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
		\Myth\Auth\Authentication\Passwords\ValidationRules::class
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];
	public $user = [
		'name' => [
			'rules' => 'required|min_length[3]',
		],
		'email' => [
			'rules' => 'required|valid_email',
		],
		'alamat' => [
			'rules' => 'required'
		],

		'NoHp' => [
			'rules' => 'is_natural'
		],
		'gmbr' => [
			'rules' => 'uploaded[gmbr]|mime_in[gmbr,image/jpg,image/jpeg,image/gif,image/png]',
		],
		'gmbrktp' => [
			'rules' => 'uploaded[gmbrktp]|mime_in[gmbrktp,image/jpg,image/jpeg,image/gif,image/png]',
		],
		'selfie' => [
			'rules' => 'uploaded[selfie]|mime_in[selfie,image/jpg,image/jpeg,image/gif,image/png]',
		],
		'koordinat' => [
			'rules' => 'required'
		],

	];
	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
