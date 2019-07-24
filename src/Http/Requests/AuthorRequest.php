<?php

namespace Wadahesam\LaravelBlogPlugin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
            'name' => ['required'],
            'description' => 'required',
            'facebook_link' => 'required|url',
            'twitter_link' => 'required|url',
        ];
    }
}
