<?php

namespace App\Http\Requests;

//继承了这个基类，意味着我们可以修改它------>表单验证
use Illuminate\Foundation\Http\FormRequest;

class CheckFormRequest extends FormRequest
{
	protected $redirect = "error";
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
	//控制访问权限
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
	        'username' => 'required|max:16|min:6',
	        'password' => 'required|min:6'
        ];
    }


//	public function messages()
//	{
//		return [
//			'username.required|username.min' => 'xxxxxx1',
//			'password.required'  => 'xxxxxx2',
//		];
//	}
}
