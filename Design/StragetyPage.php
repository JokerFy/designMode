<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/8/23
 * Time: 14:40
 */

namespace Design;

class StragetyPage
{
    protected $stragety;
    public function index(){
        echo "AD:";
        $this->stragety->showAd();
        echo "<br>";

        echo "Category:";
        $this->stragety->showCategory();
        echo "<br>";
    }

    public function setStragety(UserStrategy $strategy){
        $this->stragety = $strategy;
    }
}

$page = new StragetyPage();
if(true){
    $strategy = new FemaleUserStrategy();
}else{
    $strategy = new MaleUserStrategy();
}
$page->setStragety($strategy);
$page->index();