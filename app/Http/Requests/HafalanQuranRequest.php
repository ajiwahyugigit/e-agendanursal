<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HafalanQuranRequest extends FormRequest
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
            'hari' => 'required',
            'tanggal' => 'required',
            'surat_quran' => 'required',
            'santri_id' => 'required|string|exists:santri_id'
        ];
    }
}
