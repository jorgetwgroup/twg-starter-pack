<?php

namespace App\Http\Requests\Frontend;

use App\Rules\RutRule;
use App\Rules\PhoneRule;
use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class SellerStoreRequest extends FormRequest
{
    private $prepareData = [
        'activities_data',
        'addresses_data',
        'bank_data',
        'contact_data',
    ];

    protected function prepareForValidation()
    {
        foreach ($this->prepareData as $attrName) {
            if (empty($this->$attrName)) {
                return;
            }

            $validation = json_decode($this->$attrName);
            $forValidation = [];

            foreach ($validation as $attrs) {
                $forValidation[] = (array) $attrs;
            }

            $this->merge([
                $attrName.'_validation' => $forValidation,
            ]);
        }
    }

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
        $rutRule = new RutRule;
        $phoneRule = new PhoneRule;

        return [
            'uid' => ['required', 'unique:sellers,uid', 'string', $rutRule],
            'name' => 'required|string',
            'visible_name' => 'required|string',
            'email' => 'required|email',
            'phone' => ['nullable', $phoneRule],
            'web' => 'nullable|string',
            'seller_category_id' => 'required|exists:seller_categories,id',

            'street' => 'required|distinct',
            'number' => 'required',
            'subnumber' => 'nullable',
            'commune_id' => 'required|int|exists:communes,id',

            'legal_representative_name' => 'required',
            'custom_1' => 'required',
            'custom_2' => 'required',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'uid' => 'RUT',
            'name' => 'Razón social',
            'visible_name' => 'Nombre visible',
            'email' => 'Email',
            'phone' => 'Teléfono',
            'web' => 'Sitio web',
            'seller_category_id' => 'Categoría',

            // addresses data
            'street' => 'Calle en Direcciones',
            'number' => 'Número en Direcciones',
            'subnumber' => 'Sub Número en Direcciones',
            'commune_id' => 'Comuna en Direcciones',
            
            'legal_representative_name' => 'Tu nombre',
            'custom_1' => 'Contrato con transbank',
            'custom_2' => 'Currier utilizado',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => 'Es necesario completar el campo :attribute.',
            'string' => 'El campo :attribute debe ser texto',
            'date' => 'El campo :attribute debe ser de tipo fecha',
            'unique' => 'El campo :attribute ya está siendo utilizado por otro cliente.',
            'exists' => 'No se pudo encontrar una relación con el campo :attribute.',
        ];
    }
}
