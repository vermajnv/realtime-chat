<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourtTypeValidator extends FormRequest
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
        if ($this->method() == "POST") {
            return [
                    'en_title' => 'required|unique:court_type_translations,title|max:255|string',
                    'hi_title' => 'required|unique:court_type_translations,title|max:255|string',
                    'en_description' => 'nullable|string',
                    'hi_description' => 'nullable|string',
                ];
        }
        if ($this->method() == "PUT") {
            return [
                    'en_title' => 'required|unique:court_type_translations,title,' . $this->court_type->translate('en')->id . '|max:255|string',
                    'hi_title' => 'required|unique:court_type_translations,title,' . $this->court_type->translate('hi')->id . '|max:255|string',
                    'en_description' => 'nullable|string',
                    'hi_description' => 'nullable|string',
                ];
        }
    }

    public function messages()
    {
        return [
            'en_title.required' => 'Please add the title in English',
            'hi_title.required' => 'Please add the title in Hindi',
            'en_title.unique' => 'Court type already exist in English',
            'hi_title.unique' => 'Court type already exist in Hindi',
        ];
    }
}
