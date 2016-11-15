/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	
	
	config.filebrowserBrowseUrl = '/chuthapdothainguyen/public/quantri/ckeditor/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = '/chuthapdothainguyen/public/quantri/ckeditor/ckfinder/ckfinder.html?type=Images';
	config.filebrowserFlashBrowseUrl = '/chuthapdothainguyen/public/quantri/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = '/chuthapdothainguyen/public/quantri/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = '/chuthapdothainguyen/public/quantri/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
	
	//Cấu hình trên web
	/*
	config.filebrowserBrowseUrl = '/public/quantri/ckeditor/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = '/public/quantri/ckeditor/ckfinder/ckfinder.html?type=Images';
	config.filebrowserFlashBrowseUrl = '/public/quantri/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = '/public/quantri/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = '/public/quantri/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
	*/
};
