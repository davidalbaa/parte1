@csrf
<div class="row">

    <input name="id" type="hidden" value="{{ $item->id }}" />

    {{ input([
        'name' => 'name',
        'id' => 'name',
        'placeholder' => 'Ingresa el nombre del proveedor',
        'type' => 'text',
        'label' => 'Nombre de categoria',
        'value' => $item->name,
    ]) }}

    {{ input([
        'name' => 'email',
        'id' => 'email',
        'placeholder' => 'Ingresa el correo del proveedor',
        'type' => 'text',
        'label' => 'Correo del proveedor',
        'value' => $item->email,
    ]) }}
</div>
