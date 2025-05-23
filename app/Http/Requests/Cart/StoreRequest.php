<?php

namespace App\Http\Requests\Cart;

use App\Rules\StockRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'product_id' => [
                'required',
                'exists:products,id',
                new StockRule()
            ]
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'product_id' => $this->product->id,
        ]);
    }
}
