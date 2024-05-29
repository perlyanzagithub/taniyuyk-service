<?php

namespace App\Models\request;

use Illuminate\Foundation\Http\FormRequest;

class CreateDrcRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array|object
    {
        return [
            'berat_basah' => 'required|string',
            'drc' => 'required|string',
        ];
    }
}
