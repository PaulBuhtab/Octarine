<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => "Параметр :attribute должен быть принят.",
	"active_url"           => "Параметр :attribute не является корректным URL.",
	"after"                => "Параметр :attribute должен быть датой после :date.",
	"alpha"                => "Параметр :attribute может содержать только буквы.",
	"alpha_dash"           => "Параметр :attribute может содержать только буквы, числа, и тире.",
	"alpha_num"            => "Параметр :attribute может содержать только буквы и числа.",
	"array"                => "Параметр :attribute должен быть массивом.",
	"before"               => "Параметр :attribute должен быть датой до :date.",
	"between"              => [
		"numeric" => "Параметр :attribute должен быть между :min и :max.",
		"file"    => "Параметр :attribute должен быть между :min и :max килобайт.",
		"string"  => "Параметр :attribute должен быть между :min и :max characters.",
		"array"   => "Параметр :attribute должен иметь от :min до :max элементов.",
	],
	"boolean"              => "Параметр :attribute должен быть или Истина или ложь.",
	"confirmed"            => "Подтверждение :attribute не совпадает.",
	"date"                 => "Параметр :attribute не является корректной датой.",
	"date_format"          => "Параметр :attribute does not match Параметр format :format.",
	"different"            => "Параметр :attribute and :oПараметрr must be different.",
	"digits"               => "Параметр :attribute must be :digits digits.",
	"digits_between"       => "Параметр :attribute must be between :min and :max digits.",
	"email"                => "Параметр :attribute должен быть корректным адресом email.",
	"filled"               => "Параметр :attribute field is required.",
	"exists"               => "Параметр selected :attribute is invalid.",
	"image"                => "Параметр :attribute must be an image.",
	"in"                   => "Параметр selected :attribute is invalid.",
	"integer"              => "Параметр :attribute must be an integer.",
	"ip"                   => "Параметр :attribute must be a valid IP address.",
	"max"                  => [
		"numeric" => "Параметр :attribute may not be greater than :max.",
		"file"    => "Параметр :attribute may not be greater than :max kilobytes.",
		"string"  => "Параметр :attribute may not be greater than :max characters.",
		"array"   => "Параметр :attribute may not have more than :max items.",
	],
	"mimes"                => "Параметр :attribute must be a file of type: :values.",
	"min"                  => [
		"numeric" => "Параметр :attribute must be at least :min.",
		"file"    => "Параметр :attribute must be at least :min kilobytes.",
		"string"  => "Параметр :attribute must be at least :min characters.",
		"array"   => "Параметр :attribute must have at least :min items.",
	],
	"not_in"               => "Параметр selected :attribute is invalid.",
	"numeric"              => "Параметр :attribute must be a number.",
	"regex"                => "Параметр :attribute format is invalid.",
	"required"             => "Параметр :attribute field is required.",
	"required_if"          => "Параметр :attribute field is required when :other is :value.",
	"required_with"        => "Параметр :attribute field is required when :values is present.",
	"required_with_all"    => "Параметр :attribute field is required when :values is present.",
	"required_without"     => "Параметр :attribute field is required when :values is not present.",
	"required_without_all" => "Параметр :attribute field is required when none of :values are present.",
	"same"                 => "Параметр :attribute and :oПараметрr must match.",
	"size"                 => [
		"numeric" => "Параметр :attribute must be :size.",
		"file"    => "Параметр :attribute must be :size kilobytes.",
		"string"  => "Параметр :attribute must be :size characters.",
		"array"   => "Параметр :attribute must contain :size items.",
	],
	"unique"               => "Параметр :attribute has already been taken.",
	"url"                  => "Параметр :attribute format is invalid.",
	"timezone"             => "Параметр :attribute must be a valid zone.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => [
		'attribute-name' => [
			'rule-name' => 'custom-message',
		],
	],

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => [],

];
