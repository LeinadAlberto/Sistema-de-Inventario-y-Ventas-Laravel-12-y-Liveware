<x-admin-layout 

title="Dashboard | LokyWevDev"

:breadcrumbs="[
    [
        'name' => 'Dashboard', 
        'href' => route('admin.dashboard')
    ],
    [
        'name' => 'Pruebas'
    ]
]">

    <x-slot name="action">
        Hola Mundo
    </x-slot>
    Hola desde el Admin

</x-admin-layout>