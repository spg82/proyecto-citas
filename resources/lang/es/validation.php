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

    'accepted' => 'El :attribute debe ser aceptado.',
    'accepted_if' => 'El :attribute debe ser aceptado cuando :other es :value.',
    'active_url' => 'El :attribute no es una URL válida.',
    'after' => 'El :attribute debe ser una fecha posterior :date.',
    'after_or_equal' => 'El :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El :attribute solo debe contener letras.',
    'alpha_dash' => 'El :attribute solo debe contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El :attribute solo debe contener letras y números.',
    'array' => 'El :attribute debe ser una matriz.',
    'before' => 'El :attribute debe ser una fecha anterior :date.',
    'before_or_equal' => 'El :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file' => 'El :attribute debe estar entre :min y :max kilobytes.',
        'string' => 'El :attribute debe estar entre :min y :max carácteres.',
        'array' => 'El :attribute debe estar entre :min y :max artículos.',
    ],
    'boolean' => 'El :attribute debe ser true o false.',
    'confirmed' => 'El :attribute la confirmación no coincide.',
    'current_password' => 'El password es incorrecto.',
    'date' => 'El :attribute no es una fecha válida.',
    'date_equals' => 'El :attribute mdebe ser una fecha igual a :date.',
    'date_format' => 'El :attribute no coincide con el formato :format.',
    'declined' => 'El :attribute debe ser rechazado.',
    'declined_if' => 'El :attribute debe rechazarse cuando :other es :value.',
    'different' => 'El :attribute y :other debe ser diferente.',
    'digits' => 'El :attribute debe ser :digits digito.',
    'digits_between' => 'El :attribute debe tener como mínimo :min y como máximo :max digitos.',
    'dimensions' => 'El :attribute tiene dimensiones de imagen no válidas.',
    'distinct' => 'El :attribute tiene un valor duplicado.',
    'email' => 'El :attribute debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'El :attribute debe terminar con uno de los siguientes: :values.',
    'enum' => 'El seleccionado :attribute es invalido.',
    'exists' => 'El seleccionado :attribute es invalido.',
    'file' => 'El :attribute debe ser un archivo.',
    'filled' => 'El :attribute debe tener un valor.',
    'gt' => [
        'numeric' => 'El :attribute debe ser mayor que :value.',
        'file' => 'El :attribute debe ser mayor que :value kilobytes.',
        'string' => 'El :attribute debe ser mayor que :value carácteres.',
        'array' => 'El :attribute debe tener más de :value items.',
    ],
    'gte' => [
        'numeric' => 'El :attribute debe ser mayor o igual que:value.',
        'file' => 'El :attribute debe ser mayor o igual que :value kilobytes.',
        'string' => 'El :attribute debe ser mayor o igual que :value caráteres.',
        'array' => 'El :attribute debe tener :value artículos o más.',
    ],
    'image' => 'El :attribute debe ser una imagen.',
    'in' => 'El seleccionado :attribute es invalido.',
    'in_array' => 'El :attribute no existe en :other.',
    'integer' => 'El :attribute debe ser un entero.',
    'ip' => 'El :attribute debe ser una IP válida.',
    'ipv4' => 'El :attribute debe ser una IPv4 válida.',
    'ipv6' => 'El :attribute debe ser IPv6 válida.',
    'mac_address' => 'El :attribute debe ser una direccuión MAC válida.',
    'json' => 'El :attribute debe ser una cadena JSON válida.',
    'lt' => [
        'numeric' => 'El :attribute debe ser menor que :value.',
        'file' => 'El :attribute debe ser menor que :value kilobytes.',
        'string' => 'El :attribute debe ser menor que :value carácteres.',
        'array' => 'El :attribute no debe tener menos que :value artículos.',
    ],
    'lte' => [
        'numeric' => 'El :attribute debe ser menor o igual que :value.',
        'file' => 'El :attribute debe ser menor o igual que :value kilobytes.',
        'string' => 'El :attribute debe ser menor o igual que :value carácteres.',
        'array' => 'El :attribute no debe tener más de :value artículos.',
    ],
    'max' => [
        'numeric' => 'El :attribute no debe tener más de :max números.',
        'file' => 'El :attribute no debe ser mayor de :max kilobytes.',
        'string' => 'El :attribute no debe tener más de :max carácteres.',
        'array' => 'El :attribute no debe tener más de :max artículos.',
    ],
    'mimes' => 'El :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => 'El :attribute al menos debe tener :min números.',
        'file' => 'El :attribute al menos debe tener :min kilobytes.',
        'string' => 'El :attribute al menos debe tener :min carácteres.',
        'array' => 'El :attribute al menos debe tener :min artículos.',
    ],
    'multiple_of' => 'El :attribute debe ser múltiplo de :value.',
    'not_in' => 'El seleccionado :attribute es invalido.',
    'not_regex' => 'El :attribute formato es invalido.',
    'numeric' => 'El :attribute debe ser un número.',
    'password' => 'El password es incorrecto.',
    'present' => 'El :attribute debe estar presente.',
    'prohibited' => 'El :attribute esta prohibido.',
    'prohibited_if' => 'El :attribute está prohibido cuando :other es :value.',
    'prohibited_unless' => 'El :attribute está prohibido a menos que :other es un :values.',
    'prohibits' => 'El :attribute prohibido :other de estar presente.',
    'regex' => 'El :attribute formato es invalido.',
    'required' => 'El :attribute es obligatorio.',
    'required_if' => 'El :attribute es obligatorio cuando :other es :value.',
    'required_unless' => 'El :attribute es obligatorio a menos que :other es un :values.',
    'required_with' => 'El :attribute es obligatorio cuando :values esta presente.',
    'required_with' => 'El :attribute es obligatorio cuando :values esta presente.',
    'required_with_all' => 'El :attribute es obligatorio cuando :values están presentes.',
    'required_without' => 'El :attribute es obligatorio cuando :values no esta presente.',
    'required_without_all' => 'El :attribute es obligatorio cuando ninguno de :values estan presentes.',
    'same' => 'El :attribute y :other deben coincidir.',
    'size' => [
        'numeric' => 'El :attribute debe ser :size.',
        'file' => 'El :attribute debe ser :size kilobytes.',
        'string' => 'El :attribute debe ser :size characters.',
        'array' => 'El :attribute debe contener :size artículos.',
    ],
    'starts_with' => 'El :attribute debe empezar con uno de los siguientes: :values.',
    'string' => 'El :attribute debe de ser una cadena.',
    'timezone' => 'El :attribute debe ser una zona horaria válida.',
    'unique' => 'El :attribute ya se ha tomado.',
    'uploaded' => 'El :attribute no se pudo cargar.',
    'url' => 'El :attribute debe ser una URL válida.',
    'uuid' => 'El :attribute debe ser un UUID válido.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'apellido1' => 'apellido paterno ',
        'apellido2'=>'apellido materno',
        'name'=> 'nombre',
        'password'=>'contraseña'
    ],

];
