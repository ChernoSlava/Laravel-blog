@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif             
<div>
    {{ Form::label('name', 'Название', ['class' => 'custom-create_label'])}}
    {{ Form::text('name'), ['class' => 'custom-create_input'] }}<br>
</div>

<div>
    {{ Form::label('body', 'Содержание', ['class' => 'custom-create_label']) }}
    {{ Form::textarea('body'), ['class' => 'custom-create_input'] }}<br>
</div>
