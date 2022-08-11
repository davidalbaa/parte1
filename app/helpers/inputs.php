<?php

function input($data)
{
    extract($data);
    if (!isset($name)) {
        $name = "";
    }
    if (!isset($type)) {
        $type = "";
    }
    if (!isset($placeholder)) {
        $placeholder = "";
    }
    if (!isset($id)) {
        $id = "";
    }
    if (!isset($value)) {
        $value = "";
    }
    if (!isset($label)) {
        $label = "";
    }

    return view(
        "modules.shared.input",
        compact("name", "type", "placeholder", "id", "value", "label")
    );
}

function inputLogin($data)
{
    extract($data);
    if (!isset($name)) {
        $name = "";
    }
    if (!isset($type)) {
        $type = "";
    }
    if (!isset($placeholder)) {
        $placeholder = "";
    }
    if (!isset($id)) {
        $id = "";
    }
    if (!isset($value)) {
        $value = "";
    }
    if (!isset($label)) {
        $label = "";
    }

    return view(
        "modules.shared.inputLogin",
        compact("name", "type", "placeholder", "id", "value", "label")
    );
}
function select($data)
{
    extract($data);
    if (!isset($name)) {
        $name = "";
    }
    if (!isset($array)) {
        $array = [];
    }
    if (!isset($id)) {
        $id = "";
    }
    if (!isset($value)) {
        $value = "";
    }
    if (!isset($label)) {
        $label = "";
    }
    if (!isset($text)) {
        $text = "";
    }
    return view(
        "modules.shared.select",
        compact("name", "array", "id", "value", "label", "text")
    );
}
