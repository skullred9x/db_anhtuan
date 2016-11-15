<?php 
use tungo\Strings\Strings;

/**
* 
*/
class Upload extends Eloquent
{

	public function upload_file($inputName)
	{
		$strings = new Strings;
		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		$destination      = public_path('uploads'); // upload directory
		$file             = Input::file($inputName);
		$extension        = $file->getClientOriginalExtension(); 
		$size             = $file->getSize();
		$name             = $strings->to_file_name($file->getClientOriginalName());
		$file->move($destination,$name);
		return asset('public/uploads/'.$name);
	}


	public function upload_files($inputName)
	{
		foreach(Input::file($inputName) as $file)
		{
			$rules = array(
				'file' => 'required|mimes:png,gif,jpeg,txt,pdf,doc,rtf|max:20000'
			);

			$validator = Validator::make(array('file'=> $file), $rules);

			if($validator->passes())
			{
				$strings = new Strings;
				$destination      = public_path('uploads'); // upload directory
				$file             = Input::file($inputName);
				$name             = $strings->to_file_name($file->getClientOriginalName());
				$file->move($destination,$name);
				return asset('public/uploads/'.$name);
			}
			else
			{
				//Does not pass validation
				$errors = $validator->errors();
				return 'Lỗi';
			}
		}
	}


} // End class