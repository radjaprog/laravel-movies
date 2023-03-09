<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatMovieRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:4',
            'director' => 'required|min:5|max:50',
            'year' => 'required|min:4',
            'storyline' => 'required|min:10|max:250',
            'genre_ids' => 'required|array',
            'genre_ids.*' => 'integer|exists:genres,id'
        ];
    }
}
