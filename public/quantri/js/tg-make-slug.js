jQuery.fn.slug = function(options) {
	var settings = {
		slug: 'slug', // Class used for slug destination input and span. The span is created on $(document).ready() 
		hide: true	 // Boolean - By default the slug input field is hidden, set to false to show the input field and hide the span. 
	};
	
	if(options) {
		jQuery.extend(settings, options);
	}
	
	$this = jQuery(this);

	jQuery(document).ready( function() {
		if (settings.hide) {
			jQuery('input.' + settings.slug).after("<span class="+settings.slug+"></span>");
			jQuery('input.' + settings.slug).hide();
		}
	});
	
	makeSlug = function() {
			var slugcontent = $this.val();
			slugcontent = slugcontent.toLowerCase();
			slugcontent = slugcontent.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
			slugcontent = slugcontent.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
			slugcontent = slugcontent.replace(/ì|í|ị|ỉ|ĩ/g, "i");
			slugcontent = slugcontent.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
			slugcontent = slugcontent.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
			slugcontent = slugcontent.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
			slugcontent = slugcontent.replace(/đ/g, "d");
			slugcontent = slugcontent.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|\$|_/g, "-");
			slugcontent = slugcontent.replace(/-+-/g, "-");
			slugcontent = slugcontent.replace(/^\-+|\-+$/g, "");
			var slugcontent_hyphens = slugcontent.replace(/[\s]+/g,'-');
			var finishedslug = slugcontent_hyphens;
			jQuery('input.' + settings.slug).val(finishedslug.toLowerCase());
			jQuery('span.' + settings.slug).text(finishedslug.toLowerCase());

		}
		
	jQuery(this).keyup(makeSlug);
		
	return $this;
};
