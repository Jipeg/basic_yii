<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * EntryForm is the model behind the form.
 *
 */
class About extends Model
{
    public $name;
    public $published_at;

    function __construct() {
        $this->published_at = time();
    }
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name'], 'required']
        ];
    }
}
