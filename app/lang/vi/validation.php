<?php

return array(

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

	"accepted"             => "The :attribute must be accepted.",
	"active_url"           => "The :attribute is not a valid URL.",
	"after"                => "The :attribute must be a date after :date.",
	"alpha"                => "Trường này chỉ chứa chữ cái.",
	"alpha_dash"           => "Trường này chỉ chứa chữ cái, số và dấu gạch ngang.",
	"alpha_num"            => "Trường này chỉ chứa chữ cái và số.",
	"array"                => "The :attribute must be an array.",
	"before"               => "The :attribute must be a date before :date.",
	"between"              => array(
		"numeric" => "Số phải trong khoảng từ :min đến :max.",
		"file"    => "The :attribute must be between :min and :max kilobytes.",
		"string"  => "Độ dài cho phép từ :min đến :max ký tự.",
		"array"   => "The :attribute must have between :min and :max items.",
	),
	"boolean"              => "Trường này phải có kiểu đúng hoặc sai.",
	"confirmed"            => "Mật khẩu nhập vào không khớp.",
	"date"                 => "Định dạng ngày không hợp lệ.",
	"date_format"          => "Ngày phải có định dạng :format.",
	"different"            => "The :attribute and :other must be different.",
	"digits"               => "The :attribute must be :digits digits.",
	"digits_between"       => "The :attribute must be between :min and :max digits.",
	"email"                => "Định dạng Email không hợp lệ.",
	"exists"               => "The selected :attribute is invalid.",
	"image"                => "Định dạng ảnh không hợp lệ.",
	"in"                   => "The selected :attribute is invalid.",
	"integer"              => "Phải là kiểu số nguyên.",
	"ip"                   => "Phải là địa chỉ IP.",
	"max"                  => array(
		"numeric" => "Số này không lớn hơn :max.",
		"file"    => "Dung lượng không lớn hơn :max Kb.",
		"string"  => "Độ dài không lớn hơn :max ký tự.",
		"array"   => "The :attribute may not have more than :max items.",
	),
	"mimes"                => "The :attribute must be a file of type: :values.",
	"min"                  => array(
		"numeric" => "Số này không nhỏ hơn :min.",
		"file"    => "Dung lương không nhỏ hơn :min Kb.",
		"string"  => "Độ dài không nhỏ hơn :min ký tự.",
		"array"   => "The :attribute must have at least :min items.",
	),
	"not_in"               => "The selected :attribute is invalid.",
	"numeric"              => "Yêu cầu nhập nhập số.",
	"regex"                => "Định dạng không hợp lệ.",
	"required"             => "Trường này không được để trống.",
	"required_if"          => "The :attribute field is required when :other is :value.",
	"required_with"        => "The :attribute field is required when :values is present.",
	"required_with_all"    => "The :attribute field is required when :values is present.",
	"required_without"     => "The :attribute field is required when :values is not present.",
	"required_without_all" => "The :attribute field is required when none of :values are present.",
	"same"                 => "The :attribute and :other must match.",
	"size"                 => array(
		"numeric" => "The :attribute must be :size.",
		"file"    => "The :attribute must be :size kilobytes.",
		"string"  => "The :attribute must be :size characters.",
		"array"   => "The :attribute must contain :size items.",
	),
	"unique"               => "Trường này đã tồn tại.",
	"url"                  => "Liên kết không hợp lệ.",

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

	'custom' => array(
		'hoten' => array(
			'required' => 'Họ tên không được để trống.',
		),
		'gioitinh' => array(
			'required' => 'Giới tính không được để trống.',
		),
		'ngaysinh' => array(
			'required' => 'Ngày sinh không được để trống.',
		),
		'thangsinh' => array(
			'required' => 'Tháng sinh không được để trống.',
		),
		'namsinh' => array(
			'required' => 'Năm sinh không được để trống.',
		),
		'cmnd' => array(
			'required' => 'Số CMND không được để trống.',
			'numeric' => 'Số CMND phải là số.',
		),
		'email' => array(
			'required' => 'Email không được để trống.',
			'email' => 'Định dạng Email không hợp lệ.',
		),
		'nhommau' => array(
			'required' => 'Nhóm máu không được để trống.',
		),
		'chieucao' => array(
			'required' => 'Chiều cao không được để trống.',
		),
		'cannang' => array(
			'required' => 'Cân nặng không được để trống.',
		),
		'solanhien' => array(
			'required' => 'Số lần hiến không được để trống.',
			'numeric' => 'Số lần hiến phải là số.',
		),
		'thoigianhien' => array(
			'date_format' => 'Lần hiến máu gần nhất phải là định dạng ngày dd/mm/yyyy.',
		),
		'dongy' => array(
			'required' => 'Bạn chưa đồng ý với các điều khoản ở trên.',
		),
	),

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

	'attributes' => array(),

);
