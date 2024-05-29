<?php

namespace App\Models\request;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDrcRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array|object
    {
        return [
            'id' => 'required|integer',
            'berat_basah' => 'required|string',
            'drc' => 'required|string',
        ];
    }
}
