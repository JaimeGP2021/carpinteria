<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMuebleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "denominacion" => 'required|string',
            "precio" => 'required|decimal:0,2|min:0.1',
            "tipo" => 'required|in:fabricado,prefabricado',
            "ancho" => 'nullable|required_if:tipo,fabricado|decimal:0,2|min:0.01',
            "alto" => 'nullable|required_if:tipo,fabricado|decimal:0,2|min:0.01',
        ];
    }
}
