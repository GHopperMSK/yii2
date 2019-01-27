<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yiiunit\framework\db;

use yii\base\InvalidCallException;
use yii\db\Query;

class UnqueryableQueryMock extends Query
{
    /**
     * {@inheritdoc}
     */
    public function one($db = null)
    {
        if (!$this->emulateExecution) {
            throw new InvalidCallException();
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function all($db = null)
    {
        if (!$this->emulateExecution) {
            throw new InvalidCallException();
        }

        return [];
    }
}
