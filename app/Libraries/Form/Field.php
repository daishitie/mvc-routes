<?php

namespace App\Libraries\Form;

use App\Libraries\Model;

/**
 * Field
 *
 * @author daishitie <daishitie@otakunity.net>
 * @copyright 2020 daishitie
 */
class Field
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';

    public Model $model;
    public string $attribute;
    public string $type;

    /**
     * Field constructor
     *
     * @param Model $model
     * @param string $attribute
     */
    public function __construct($model, $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
        $this->type = self::TYPE_TEXT;
    }

    public function __toString()
    {
        $label = $this->attribute;
        $name = $this->attribute;
        $type = $this->type;
        $value = $this->model->{$this->attribute};
        $class = $this->model->hasError($this->attribute) ? ' is-invalid' : '';
        $error = $this->model->getFirstError($this->attribute);

        return <<<HTML
            <div class="form-group">
                <label>{$label}</label>
                <input
                    type="{$type}"
                    name="{$name}"
                    value="{$value}"
                    class="form-control{$class}"
                >
                <div class="invalid-feedback">
                    {$error}
                </div>
            </div>
            HTML;
    }

    /**
     * Password field
     *
     * @return $this
     */
    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }
}
