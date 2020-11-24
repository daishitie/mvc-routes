<?php

namespace App\Libraries\Form;

use App\Libraries\Model;

/**
 * Form
 *
 * @author daishitie <daishitie@otakunity.net>
 * @copyright 2020 daishitie
 */
class Form
{
    /**
     * Begin form
     *
     * @param string $action
     * @param string $method
     */
    public static function begin($action, $method)
    {
        echo <<<HTML
            <form action="{$action}" method="{$method}">
            HTML;
        return new Form();
    }

    /**
     * End form
     */
    public static function end()
    {
        echo <<<HTML
            </form>
            HTML;
    }

    /**
     * Form field
     *
     * @param Model $model
     * @param string $attribute
     */
    public function field($model, $attribute)
    {
        return new Field($model, $attribute);
    }
}
