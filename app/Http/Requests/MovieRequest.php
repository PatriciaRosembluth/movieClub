<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class MovieRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			"name" => "required|min:6",
			"description" => "required|min:10"
			
		];
	}

	public function messages()
	{
	    return [
	        'name.required' => 'El campo name es requerido!',
	        'name.min' => 'El campo name no puede tener menos de 6 carácteres',
			'description.required' => 'El campo description es requerido!',
	        'description.min' => 'El campo description no puede tener menos de 10 carácteres',
	    ];
	}

}
