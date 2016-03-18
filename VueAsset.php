<?php
/**
 * @link 
 * @copyright Copyright (c) 2008 CoLee Software LLC
 * @license MIT
 */

namespace colee\vue;

use yii\web\AssetBundle;

/**
 * @author CoLee
 */
class VueAsset extends AssetBundle
{
    public $sourcePath='@bower/vue/dist/';
    public $css = [
        
    ];
    public $js = [
        
    ];
    public $depends = [
        
    ];
    public function init()
    {
        $this->js[] = YII_ENV_DEV ? 'vue.js' : 'vue.min.js';
    }
}
