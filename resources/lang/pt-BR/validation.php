<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Seu puto, :Attribute deve ser aceito.',
    'active_url'           => 'Seu puto, :Attribute não é uma URL válida.',
    'after'                => 'Seu puto, :Attribute deve ser uma data depois de :date.',
    'alpha'                => 'Seu puto, :Attribute deve conter somente letras.',
    'alpha_dash'           => 'Seu puto, :Attribute deve conter letras, números e traços.',
    'alpha_num'            => 'Seu puto, :Attribute deve conter somente letras e números.',
    'array'                => 'Seu puto, :Attribute deve ser um array.',
    'before'               => 'Seu puto, :Attribute deve ser uma data antes de :date.',
    'between'              => [
        'numeric' => 'Seu puto, :Attribute deve estar entre :min e :max.',
        'file'    => 'Seu puto, :Attribute deve estar entre :min e :max kilobytes.',
        'string'  => 'Seu puto, :Attribute deve estar entre :min e :max caracteres.',
        'array'   => 'Seu puto, :Attribute deve ter entre :min e :max itens.',
    ],
    'boolean'              => 'Seu puto, :Attribute deve ser verdadeiro ou falso.',
    'confirmed'            => 'Seu puto, A confirmação de :attribute não confere.',
    'date'                 => 'Seu puto, :Attribute não é uma data válida.',
    'date_format'          => 'Seu puto, :Attribute não confere com o formato :format.',
    'different'            => 'Seu puto, :Attribute e :other devem ser diferentes.',
    'digits'               => 'Seu puto, :Attribute deve ter :digits dígitos.',
    'digits_between'       => 'Seu puto, :Attribute deve ter entre :min e :max dígitos.',
    'email'                => 'Seu puto, :Attribute deve ser um endereço de e-mail válido.',
    'exists'               => 'Seu puto, o :attribute selecionado é inválido.',
    'filled'               => 'Seu puto, :Attribute é um campo obrigatório.',
    'image'                => 'Seu puto, :Attribute deve ser uma imagem.',
    'in'                   => 'Seu puto, :Attribute é inválido.',
    'integer'              => 'Seu puto, :Attribute deve ser um inteiro.',
    'ip'                   => 'Seu puto, :Attribute deve ser um endereço IP válido.',
    'json'                 => 'Seu puto, :Attribute deve ser um JSON válido.',
    'max'                  => [
        'numeric' => 'Seu puto, :Attribute não deve ser maior que :max.',
        'file'    => 'Seu puto, :Attribute não deve ter mais que :max kilobytes.',
        'string'  => 'Seu puto, :Attribute não deve ter mais que :max caracteres.',
        'array'   => 'Seu puto, :Attribute não pode ter mais que :max itens.',
    ],
    'mimes'                => 'Seu puto, :Attribute deve ser um arquivo do tipo: :values.',
    'min'                  => [
        'numeric' => 'Seu puto, :Attribute deve ser no mínimo :min.',
        'file'    => 'Seu puto, :Attribute deve ter no mínimo :min kilobytes.',
        'string'  => 'Seu puto, :Attribute deve ter no mínimo :min caracteres.',
        'array'   => 'Seu puto, :Attribute deve ter no mínimo :min itens.',
    ],
    'not_in'               => 'Seu puto, o :attribute selecionado é inválido.',
    'numeric'              => 'Seu puto, :Attribute deve ser um número.',
    'regex'                => 'Seu puto, o formato de :attribute é inválido.',
    'required'             => 'Seu puto, o campo :attribute é obrigatório.',
    'required_if'          => 'Seu puto, o campo :attribute é obrigatório quando :other é :value.',
    'required_unless'      => 'Seu puto, o :attribute é necessário a menos que :other esteja em :values.',
    'required_with'        => 'Seu puto, o campo :attribute é obrigatório quando :values está presente.',
    'required_with_all'    => 'Seu puto, o campo :attribute é obrigatório quando :values estão presentes.',
    'required_without'     => 'Seu puto, o campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'Seu puto, o campo :attribute é obrigatório quando nenhum destes estão presentes: :values.',
    'same'                 => 'Seu puto, :Attribute e :other devem ser iguais.',
    'size'                 => [
        'numeric' => 'Seu puto, :Attribute deve ser :size.',
        'file'    => 'Seu puto, :Attribute deve ter :size kilobytes.',
        'string'  => 'Seu puto, :Attribute deve ter :size caracteres.',
        'array'   => 'Seu puto, :Attribute deve conter :size itens.',
    ],
    'string'               => 'Seu puto, :Attribute deve ser uma string',
    'timezone'             => 'Seu puto, :Attribute deve ser uma timezone válida.',
    'unique'               => 'Seu puto, :Attribute já está em uso.',
    'url'                  => 'Seu puto, o formato de :attribute é inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name' => 'nome',
        'email' => 'e-mail',
        'skills' => 'habilidades',
        'roles' => 'função',
    ],

];
