<x-site-layout>
    @php
        $family = [
            ['name' => 'Lilian', 'gender' => 'male'],
            ['name' => 'Marc', 'gender' => 'male'],
            ['name' => 'Deborah', 'gender' => 'female'],
        ];
    @endphp

    <pre>
        {{json_encode($family)}}
    </pre>
</x-site-layout>
