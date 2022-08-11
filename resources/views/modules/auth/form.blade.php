@csrf
<div class="row">

    {{ inputLogin([
        'name' => 'name',
        'id' => 'name',
        'placeholder' => 'Ingresa tu nombre',
        'type' => 'text',
        'label' => 'Nombre de usuario',
        'value' => $item->name,
    ]) }}
    {{ inputLogin([
        'name' => 'password',
        'id' => 'password',
        'placeholder' => 'Ingresa tu password',
        'type' => 'password',
        'label' => 'Password',
        'value' => $item->password,
    ]) }}
</div>
