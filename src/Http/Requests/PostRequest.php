<?php

namespace Wadahesam\LaravelBlogPlugin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
{
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
          'title' => 'required|min:3|string',
          'content' => 'required',
          'introduction' => 'required',
          'file' => 'required',
          'category' => ['required', Rule ::notIn(['']),],
          'author' => ['required', Rule::notIn([''])],
        ];
    }
}
