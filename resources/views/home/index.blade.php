<h1>Hello index from laravel</h1>
{{-- single line comment --}}
{{--

mutli
line
comment


@if ($cars > 1)
    <p>more than 1 car</p>
@else
    <p>There are no cars</p>
    This will be displayed
@endif


@foreach ($hobbies as $h)
    {{$h}}

@endforeach


<div @class(['myclass']) @style(['color:red'])>
    Blade is Laravel’s templating engine that helps you write clean and dynamic HTML views. It allows you to use PHP
    inside HTML easily, making your frontend development more efficient.
</div> --}}



@include('shared.button', ['color'=>'red','text'=> 'submit'])

@include('shared.alert',['color'=>'yellow'], ['message'=>'  If you have more questions, ask away! 😊'])