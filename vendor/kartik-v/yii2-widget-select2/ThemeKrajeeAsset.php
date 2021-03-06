<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2014 - 2015
 * @package yii2-widgets
 * @subpackage yii2-widget-select2 
 * @version 2.0.0
 */

namespace kartik\select2;

use Yii;

/**
 * Krajee Select2 theme
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class ThemeKrajeeAsset extends \kartik\base\AssetBundle
{

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/lib');
        $this->setupAssets('css', ['css/select2-krajee']);
        parent::init();
    }

}