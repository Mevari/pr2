<?php
/**
 * Created by PhpStorm.
 * User: DeadG
 * Date: 2/11/2018
 * Time: 6:20 PM
 */

namespace app\components;

use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use yii\base\Widget;
use app\models\category;
use yii\bootstrap\Nav;
use yii;




class MenuWidget extends Widget
{
    protected $tree;
    protected $data;
    protected $html;

    public function run()
    {
//
        $menu = Yii::$app->cache->get('menu');
        If ($menu) return $menu;
        $this->data = $this->GetCategory();
        $this->tree = $this->getTree();

        $this->html = $this->GenerateMenu($this->tree);
        $html = '';
        $html .= '	 
			<ul id="accordion" class="accordion">';
        $this->html = $html . $this->html;
        // $this->prv(($this->html));

       Yii::$app->cache->set('menu', $this->html, 60 * 60 * 24);
        return $this->html;

    }

    protected function GetCategory()
    {
        return Category::find()->indexBy('id')->asArray()->all();
    }



    protected function getTree()
    {
        $tree = [];
        //  var_dump($)
        foreach ($this->data as $id => &$node) {
            if ($node['parent_id'] == 0) {
                $tree[$id] = &$node;
            } else {
                $this->data[$node['parent_id']]['childs'] [$node['id']] =& $node;
            }

        }
        return $tree;
    }

    protected function GenerateMenu($categories)
    {
        $html = '';
        //$this->prv($categories);
        foreach ($categories as $item) {
            $html .= $this->GetHTML($item);
        }
        return $html;
    }
    //Smooth Accordion Dropdown Menu Demo
    protected function GetHTML($cat)
    {

        $html = '';
        $html .= '<li>';
        If ($cat['parent_id'] == '0') {

        $html .= '<div class="link">' . $cat['Name'] . '<i class="fa fa-chevron-down"></i></div>';
    }
        else{
            $html .='<a href="#">'. $cat['Name'] . '</a>';
            }

        if ($cat['childs']) {

            $html .= '<ul class="submenu">';
            $html .= $this->GenerateMenu($cat['childs']);
            $html .= '</ul>';
        }
        $html .='</li>';
        return $html;
    }


    public function prv($var)
    {

        echo "<pre>" . print_r($var, true) . "</pre>";
    }

}

