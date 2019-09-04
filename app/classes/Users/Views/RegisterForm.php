<?php

namespace App\Users\Views;

class RegisterForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'attr' => [
                'id' => 'register-form',
                'method' => 'POST',
            ],
            'fields' => [
                'name' => [
                    'label' => 'Name',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_is_not_number',
                            'validate_text_length' => ['length' => 40],
                        ]
                    ],
                ],
                'surname' => [
                    'label' => 'Surname',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_is_not_number',
                            'validate_text_length' => ['length' => 40],
                        ]
                    ],
                ],
                'email' => [
                    'label' => 'Your email',
                    'type' => 'email',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_email',
                            'validate_mail'
                        ]
                    ],
                ],
                'password' => [
                    'label' => 'Password',
                    'type' => 'password',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ]
                    ],
                ],
                'password_repeat' => [
                    'label' => 'Password repeat',
                    'type' => 'password',
                    'extra' => [
                        'validators' => [
                            'validate_not_empty'
                        ]
                    ],
                ],
                'phone' => [
                    'label' => 'Your tel no.',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                        ]
                    ],
                ],
                'address' => [
                    'label' => 'Your address',
                    'type' => 'text',
                    'extra' => [
                        'validators' => [
                        ]
                    ],
                ],
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Register',
                ],
            ],
            'validators' => [
                'validate_fields_match' => [
                    'password',
                    'password_repeat'
                ]
            ],
            'callbacks' => [
                'success' => 'form_success',
            ],
        ];
    }

}
