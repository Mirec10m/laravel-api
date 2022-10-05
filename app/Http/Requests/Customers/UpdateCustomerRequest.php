<?php

namespace App\Http\Requests\Customers;

class UpdateCustomerRequest extends CreateCustomerRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = parent::rules();

        $rules['name'] = str_replace('required', 'nullable', $rules['name']);
        $rules['business_id'] = str_replace('required', 'nullable', $rules['business_id']);
        $rules['tax_id'] = str_replace('required', 'nullable', $rules['tax_id']);
        $rules['street'] = str_replace('required', 'nullable', $rules['street']);
        $rules['city'] = str_replace('required', 'nullable', $rules['city']);
        $rules['postal_code'] = str_replace('required', 'nullable', $rules['postal_code']);
        $rules['country'] = str_replace('required', 'nullable', $rules['country']);

        return $rules;
    }
}
