<?php

if (!defined('ABSPATH')) {
    exit;
}

if (function_exists('acf_add_local_field_group')):
    acf_add_local_field_group([
        'key' => 'group_faq',
        'title' => 'FAQ Fields',
        'fields' => [
            [
                'key' => 'field_faq_section_title',
                'label' => 'FAQ Section Title',
                'name' => 'section_title',
                'type' => 'text',
                'required' => 1,
                'default_value' => '',
                'instructions' => 'Enter the title for this FAQ section',
            ],
            [
                'key' => 'field_faq_questions_group',
                'label' => 'Questions',
                'name' => 'questions',
                'type' => 'group',
                'sub_fields' => [
                    // Required Questions (1-5)
                    [
                        'key' => 'field_faq_1_question',
                        'label' => 'Question 1',
                        'name' => 'question_1',
                        'type' => 'text',
                        'required' => 1,
                        'default_value' => '',
                    ],
                    [
                        'key' => 'field_faq_1_answer',
                        'label' => 'Answer 1',
                        'name' => 'answer_1',
                        'type' => 'textarea',
                        'required' => 1,
                        'default_value' => '',
                        'rows' => 4,
                        'new_lines' => 'br',
                    ],
                    [
                        'key' => 'field_faq_2_question',
                        'label' => 'Question 2',
                        'name' => 'question_2',
                        'type' => 'text',
                        'required' => 1,
                        'default_value' => '',
                    ],
                    [
                        'key' => 'field_faq_2_answer',
                        'label' => 'Answer 2',
                        'name' => 'answer_2',
                        'type' => 'textarea',
                        'required' => 1,
                        'default_value' => '',
                        'rows' => 4,
                        'new_lines' => 'br',
                    ],
                    [
                        'key' => 'field_faq_3_question',
                        'label' => 'Question 3',
                        'name' => 'question_3',
                        'type' => 'text',
                        'required' => 1,
                        'default_value' => '',
                    ],
                    [
                        'key' => 'field_faq_3_answer',
                        'label' => 'Answer 3',
                        'name' => 'answer_3',
                        'type' => 'textarea',
                        'required' => 1,
                        'default_value' => '',
                        'rows' => 4,
                        'new_lines' => 'br',
                    ],
                    [
                        'key' => 'field_faq_4_question',
                        'label' => 'Question 4',
                        'name' => 'question_4',
                        'type' => 'text',
                        'required' => 1,
                        'default_value' => '',
                    ],
                    [
                        'key' => 'field_faq_4_answer',
                        'label' => 'Answer 4',
                        'name' => 'answer_4',
                        'type' => 'textarea',
                        'required' => 1,
                        'default_value' => '',
                        'rows' => 4,
                        'new_lines' => 'br',
                    ],
                    [
                        'key' => 'field_faq_5_question',
                        'label' => 'Question 5',
                        'name' => 'question_5',
                        'type' => 'text',
                        'required' => 1,
                        'default_value' => '',
                    ],
                    [
                        'key' => 'field_faq_5_answer',
                        'label' => 'Answer 5',
                        'name' => 'answer_5',
                        'type' => 'textarea',
                        'required' => 1,
                        'default_value' => '',
                        'rows' => 4,
                        'new_lines' => 'br',
                    ],
                    // Optional Questions (6-10)
                    [
                        'key' => 'field_faq_6_question',
                        'label' => 'Question 6 (Optional)',
                        'name' => 'question_6',
                        'type' => 'text',
                        'required' => 0,
                        'default_value' => '',
                    ],
                    [
                        'key' => 'field_faq_6_answer',
                        'label' => 'Answer 6',
                        'name' => 'answer_6',
                        'type' => 'textarea',
                        'required' => 0,
                        'default_value' => '',
                        'rows' => 4,
                        'new_lines' => 'br',
                    ],
                    [
                        'key' => 'field_faq_7_question',
                        'label' => 'Question 7',
                        'name' => 'question_7',
                        'type' => 'text',
                        'required' => 0,
                        'default_value' => '',
                    ],
                    [
                        'key' => 'field_faq_7_answer',
                        'label' => 'Answer 7',
                        'name' => 'answer_7',
                        'type' => 'textarea',
                        'required' => 0,
                        'default_value' => '',
                        'rows' => 4,
                        'new_lines' => 'br',
                    ],
                    [
                        'key' => 'field_faq_8_question',
                        'label' => 'Question 8',
                        'name' => 'question_8',
                        'type' => 'text',
                        'required' => 0,
                        'default_value' => '',
                    ],
                    [
                        'key' => 'field_faq_8_answer',
                        'label' => 'Answer 8',
                        'name' => 'answer_8',
                        'type' => 'textarea',
                        'required' => 0,
                        'default_value' => '',
                        'rows' => 4,
                        'new_lines' => 'br',
                    ],
                    [
                        'key' => 'field_faq_9_question',
                        'label' => 'Question 9',
                        'name' => 'question_9',
                        'type' => 'text',
                        'required' => 0,
                        'default_value' => '',
                    ],
                    [
                        'key' => 'field_faq_9_answer',
                        'label' => 'Answer 9',
                        'name' => 'answer_9',
                        'type' => 'textarea',
                        'required' => 0,
                        'default_value' => '',
                        'rows' => 4,
                        'new_lines' => 'br',
                    ],
                    [
                        'key' => 'field_faq_10_question',
                        'label' => 'Question 10',
                        'name' => 'question_10',
                        'type' => 'text',
                        'required' => 0,
                        'default_value' => '',
                    ],
                    [
                        'key' => 'field_faq_10_answer',
                        'label' => 'Answer 10',
                        'name' => 'answer_10',
                        'type' => 'textarea',
                        'required' => 0,
                        'default_value' => '',
                        'rows' => 4,
                        'new_lines' => 'br',
                    ],
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => FAQ_POST_TYPE_NAME
                ]
            ]
        ],
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_graphql' => true,
    ]);
endif;
