@csrf
<div class="row">
    <input name="id" type="hidden" value="{{ $item->id }}" />
    {{ input([
        'name' => 'name',
        'id' => 'name',
        'placeholder' => 'Ingresa tu nombre',
        'type' => 'text',
        'label' => 'Nombre de usuario',
        'value' => $item->name,
    ]) }}

    {{ select([
        'name' => 'rol',
        'id' => 'rol',
        'label' => 'Rol de usuario',
        'value' => $item->rol,
        'text' => 'Seleccionar rol',
        'array' => $roles,
    ]) }}

    {{ input([
        'name' => 'password',
        'id' => 'password',
        'placeholder' => 'Ingresa tu password',
        'type' => 'password',
        'label' => 'Password',
    ]) }}

    {{ input([
        'name' => 'img',
        'id' => 'img',
        'type' => 'file',
        'label' => 'IMG de perfil',
    ]) }}
</div>
