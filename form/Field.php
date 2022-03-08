<?php
/**
 * File: Field.php
 * User: aguth
 * Date: 06.März.2022
 * Time: 22:02
 */

namespace a83w\phpmvc\form;

use a83w\phpmvc\Model;

class Field
{
    const TYPE_TEXT = 'text';
    const TYPE_PASSWORD = 'password';
    const TYPE_FILE = 'file';
//    const TYPE_EMAIL = 'email';

    public Model $model;
    public string $attribute;

    /**
     * @param Model $model
     * @param string $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString(): string
    {
        return sprintf('
          <div class="mb-3">
            <label class="form-label">%s</label>
            <input type="%s" name="%s" value="%s" class="form-control %s">
            <div class="invalid-feedback">
              %s
            </div>
          </div>
        ', $this->model->getLabel($this->attribute),
            $this->type,
            $this->attribute,
            $this->model->{$this->attribute},
            $this->model->hasError($this->attribute) ? 'is-invalid' : '',
            $this->model->getFirstError($this->attribute)
        );
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

/*    public function emailField()
    {
        $this->type = self::TYPE_EMAIL;
        return $this;
    }*/

    public function fileField()
    {
        $this->type = self::TYPE_FILE;
        return $this;
    }
}