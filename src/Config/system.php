<?php

return [
    [
        'key'    => 'sales.payment_methods.stripe',
        'name'   => 'Stripe',
        'sort'   => 1,
        'fields' => [
            [
                'name'          => 'title',
                'title'         => 'stripe::app.stripe.system.title',
                'type'          => 'depends',
                'depend'        => 'active:1',
                'validation'    => 'required_if:active,1',
                'channel_based' => false,
                'locale_based'  => true,
            ], [
                'name'          => 'description',
                'title'         => 'stripe::app.stripe.system.description',
                'type'          => 'textarea',
                'channel_based' => false,
                'locale_based'  => true,
            ], [
                'name'          => 'stripe_api_key',
                'title'         => 'stripe::app.stripe.system.client-secret',
                'info'          => 'stripe::app.stripe.system.client-secret-info',
                'type'          => 'depends',
                'depend'        => 'active:1',
                'validation'    => 'required_if:active,1',
                'channel_based' => false,
                'locale_based'  => true,
            ], [
                'name'          => 'active',
                'title'         => 'stripe::app.stripe.system.status',
                'type'          => 'boolean',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
            ]
        ]
    ]
];
