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

    'accepted' => 'The <b>:attribute</b> must be accepted.',
    'active_url' => 'The <b>:attribute</b> is not a valid URL.',
    'after' => 'The <b>:attribute</b> must be a date after :date.',
    'after_or_equal' => 'The <b>:attribute</b> must be a date after or equal to :date.',
    'alpha' => 'The <b>:attribute</b> may only contain letters.',
    'alpha_dash' => 'The <b>:attribute</b> may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The <b>:attribute</b> may only contain letters and numbers.',
    'array' => 'The <b>:attribute</b> must be an array.',
    'before' => 'The <b>:attribute</b> must be a date before :date.',
    'before_or_equal' => 'The <b>:attribute</b> must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The <b>:attribute</b> must be between <b> :min </b> and :max.',
        'file' => 'The <b>:attribute</b> must be between <b> :min </b> and :max kilobytes.',
        'string' => 'The <b>:attribute</b> must be between <b> :min </b> and :max characters.',
        'array' => 'The <b>:attribute</b> must have between <b> :min </b> and :max items.',
    ],
    'boolean' => 'The <b>:attribute</b> field must be true or false.',
    'confirmed' => 'The <b>:attribute</b> confirmation does not match.',
    'date' => 'The <b>:attribute</b> is not a valid date.',
    'date_equals' => 'The <b>:attribute</b> must be a date equal to :date.',
    'date_format' => 'The <b>:attribute</b> does not match the format :format.',
    'different' => 'The <b>:attribute</b> and :other must be different.',
    'digits' => 'The <b>:attribute</b> must be :digits digits.',
    'digits_between' => 'The <b>:attribute</b> must be between <b> :min </b> and :max digits.',
    'dimensions' => 'The <b>:attribute</b> has invalid image dimensions.',
    'distinct' => 'The <b>:attribute</b> field has a duplicate value.',
    'email' => 'The <b>:attribute</b> must be a valid email address.',
    'ends_with' => 'The <b>:attribute</b> must end with one of the following: :values.',
    'exists' => 'The selected <b>:attribute</b> is invalid.',
    'file' => 'The <b>:attribute</b> must be a file.',
    'filled' => 'The <b>:attribute</b> field must have a value.',
    'gt' => [
        'numeric' => 'The <b>:attribute</b> must be greater than :value.',
        'file' => 'The <b>:attribute</b> must be greater than :value kilobytes.',
        'string' => 'The <b>:attribute</b> must be greater than :value characters.',
        'array' => 'The <b>:attribute</b> must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The <b>:attribute</b> must be greater than or equal :value.',
        'file' => 'The <b>:attribute</b> must be greater than or equal :value kilobytes.',
        'string' => 'The <b>:attribute</b> must be greater than or equal :value characters.',
        'array' => 'The <b>:attribute</b> must have :value items or more.',
    ],
    'image' => 'The <b>:attribute</b> must be an image.',
    'in' => 'The selected <b>:attribute</b> is invalid.',
    'in_array' => 'The <b>:attribute</b> field does not exist in :other.',
    'integer' => 'The <b>:attribute</b> must be an integer.',
    'ip' => 'The <b>:attribute</b> must be a valid IP address.',
    'ipv4' => 'The <b>:attribute</b> must be a valid IPv4 address.',
    'ipv6' => 'The <b>:attribute</b> must be a valid IPv6 address.',
    'json' => 'The <b>:attribute</b> must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The <b>:attribute</b> must be less than :value.',
        'file' => 'The <b>:attribute</b> must be less than :value kilobytes.',
        'string' => 'The <b>:attribute</b> must be less than :value characters.',
        'array' => 'The <b>:attribute</b> must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The <b>:attribute</b> must be less than or equal :value.',
        'file' => 'The <b>:attribute</b> must be less than or equal :value kilobytes.',
        'string' => 'The <b>:attribute</b> must be less than or equal :value characters.',
        'array' => 'The <b>:attribute</b> must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The <b>:attribute</b> may not be greater than :max.',
        'file' => 'The <b>:attribute</b> may not be greater than :max kilobytes.',
        'string' => 'The <b>:attribute</b> may not be greater than :max characters.',
        'array' => 'The <b>:attribute</b> may not have more than :max items.',
    ],
    'mimes' => 'The <b>:attribute</b> must be a file of type: :values.',
    'mimetypes' => 'The <b>:attribute</b> must be a file of type: :values.',
    'min' => [
        'numeric' => 'The <b>:attribute</b> must be at least <b> :min </b>.',
        'file' => 'The <b>:attribute</b> must be at least <b> :min </b> kilobytes.',
        'string' => 'The <b>:attribute</b> must be at least <b> :min </b> characters.',
        'array' => 'The <b>:attribute</b> must have at least <b> :min </b> items.',
    ],
    'not_in' => 'The selected <b>:attribute</b> is invalid.',
    'not_regex' => 'The <b>:attribute</b> format is invalid.',
    'numeric' => 'The <b>:attribute</b> must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The <b>:attribute</b> field must be present.',
    'regex' => 'The <b>:attribute</b> format is invalid.',
    'required' => 'The <b><b>:attribute</b></b> field is required.',
    'required_if' => 'The <b>:attribute</b> field is required when :other is :value.',
    'required_unless' => 'The <b>:attribute</b> field is required unless :other is in :values.',
    'required_with' => 'The <b>:attribute</b> field is required when :values is present.',
    'required_with_all' => 'The <b>:attribute</b> field is required when :values are present.',
    'required_without' => 'The <b>:attribute</b> field is required when :values is not present.',
    'required_without_all' => 'The <b>:attribute</b> field is required when none of :values are present.',
    'same' => 'The <b>:attribute</b> and :other must match.',
    'size' => [
        'numeric' => 'The <b>:attribute</b> must be :size.',
        'file' => 'The <b>:attribute</b> must be :size kilobytes.',
        'string' => 'The <b>:attribute</b> must be :size characters.',
        'array' => 'The <b>:attribute</b> must contain :size items.',
    ],
    'starts_with' => 'The <b>:attribute</b> must start with one of the following: :values.',
    'string' => 'The <b>:attribute</b> must be a string.',
    'timezone' => 'The <b>:attribute</b> must be a valid zone.',
    'unique' => 'The <b>:attribute</b> has already been taken.',
    'uploaded' => 'The <b>:attribute</b> failed to upload.',
    'url' => 'The <b>:attribute</b> format is invalid.',
    'uuid' => 'The <b>:attribute</b> must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for <b>:attribute</b>s using the
    | convention "<b>:attribute</b>.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given <b>:attribute</b> rule.
    |
    */

    'custom' => [
        '<b>:attribute</b>-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation <b>:attribute</b>s
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our <b>:attribute</b> placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    '<b>:attribute</b>s' => [],

];
