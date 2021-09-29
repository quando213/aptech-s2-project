<?php

use Illuminate\Http\Request;

function arrayToOptions($array, $label_attribute, $key_attribute = null): array
{
    $options = [];
    foreach ($array as $item) {
        if ($key_attribute) {
            $options[$item[$key_attribute]] = $item[$label_attribute];
        } else {
            if (!in_array($item[$label_attribute], $options)) {
                array_push($options, $item[$label_attribute]);
            }
        }
    }
    return $options;
}

function buildQuery(Request $request, $data, array $where_attributes = []) {
    $sort = urldecode($request->query('sort'));
    if ($sort) {
        $sort_attribute = explode(' ', $sort)[0];
        $sort_order = explode(' ', $sort)[1] ?? 'ASC';
        $data = $data->orderBy($sort_attribute, $sort_order);
    } else {
        $data = $data->orderBy('created_at', 'desc');
    }
    foreach ($where_attributes as $attribute) {
        $value = $request->query($attribute);
        if ($value) {
            $data = $data->where($attribute, $value);
        }
    }
    return $data;
}

const DISPLAY_DATE_FORMAT = 'd/m/Y';
const DISPLAY_DATETIME_FORMAT = 'd/m/Y H:m:s';

function generateHtmlAttribute($field)
{
    $str = '';
    foreach ($field as $key => $value)
    {
        if ($key != 'element' && $key !== 'hidden')
        {
            $str .= $key . '="' . $value . '" ';
        }
    }
    return $str;
}
