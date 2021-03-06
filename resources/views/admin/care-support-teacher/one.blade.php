<?php
$header = [
    'title' => [
        'icon' => 'fas fa-chalkboard-teacher',
        'label' => 'Care Support Teachers'
    ],
    'links' => [
        [
            'route' => route('admin.index'),
            'label' => 'Home'
        ],
        [
            'route' => route('admin.care-support-teachers'),
            'label' => 'Care Support Teachers'
        ],
        [
            'route' => '',
            'label' => $user->fullname()
        ]
    ]
]
?>

@extends('layouts.admin')

@section('content')
    @include('partials.shared.profile')
@endsection
