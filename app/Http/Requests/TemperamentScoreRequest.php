<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TemperamentScoreRequest extends FormRequest
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
            'bile_score' => 'required',
            'bloody_score' => 'required',
            'mucus_score' => 'required',
            'depression_score' => 'required',
        ];
    }
}
