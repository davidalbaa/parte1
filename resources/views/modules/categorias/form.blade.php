@csrf
<div class="row">

    <input name="id" type="hidden" value="{{ $item->id }}" />

    {{ input([
        'name' => 'name',
        'id' => 'name',
        'placeholder' => 'Ingresa el nombre de la categoria',
        'type' => 'text',
        'label' => 'Nombre de categoria',
        'value' => $item->name,
    ]) }}

</div>
