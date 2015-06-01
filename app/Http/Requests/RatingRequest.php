<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RatingRequest extends Request {

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
			"value" => "required|min:1"
		];
	}

	public function messages()
	{
	    return [
	        'value.required' => 'El campo value es requerido!',
	        'value.min' => 'El campo value debe ser mayor a 0',
	    ];
	}

}
