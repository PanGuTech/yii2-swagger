<?php

/*
 * This file is part of the light/yii2-swagger.
 *
 * (c) lichunqiang <light-li@hotmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace swagger;

use yii\base\Action;

/**
 * The document display action.
 *
 * ~~~
 * public function actions()
 * {
 *     return [
 *         'doc' => [
 *             'class' => 'light\swagger\SwaggerAction',
 *             'restUrl' => Url::to(['site/api'], true)
 *         ]
 *     ];
 * }
 * ~~~
 */
class SwaggerAction extends Action
{
    /**
     * @var string The rest url configuration.
     */
    public $restUrl;

    public function run()
    {
        $this->controller->layout = false;

        $view = $this->controller->getView();

        return $view->renderFile(__DIR__ . '/index.php', [
            'rest_url' => $this->restUrl,
        ], $this->controller);
    }
}
