<?php
/**
 * Created by PhpStorm.
 * User: samuel
 * Date: 01/03/17
 * Time: 23:42
 */

namespace CodeProject\Validators;


use Prettus\Validator\LaravelValidator;

class ClientValidator extends LaravelValidator
{

    protected $rules = [
        'name'        => 'required|max:255',
        'responsible' => 'required|max:255',
        'email'       => 'required|email',
        'phone'       => 'required',
        'address'     => 'required'
    ];

}