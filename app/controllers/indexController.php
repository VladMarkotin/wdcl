<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 20.05.2018
 * Time: 8:10
 */
namespace App\Controllers;


use App\Model\CategoryModel;

/**
 * Class indexController
 * @package App\Controllers
 */
class indexController extends Controller
{
    private $data;
    /**
     * indexController constructor.
     * @param null $view
     */
    public function __construct($view = null)
    {
        parent::__construct($view);
        /* При наличии шаблона для страницы
         * рендерим его с помощью шаблонизатора Twig. Предварительно
         * получаем объеки-ядро приложения, который и обеспечивает доступ к шаблонизатору
         */
        if($view){
            
            $twig = $this->template->getTwig();
            echo $twig->render($view, ['categories' => $data]);
            $this->data = $this->getAllCategories();
            $this->formatingData();
        }
    }
    
    private function getAllCategories()
    {
        $model = new CategoryModel();

        return $model->getData();
    }

    private function formatingData()
    {
        $tree = array();
        foreach ($this->data as $row) {
            $tree[(int) $row['parent_id']][] = $row;
        }
        $printTree = function ($tree, $pid=0) use (&$printTree) {
            echo "<div>";
            if (empty($tree[$pid]))
                return;
            echo '<ul>';
            foreach ($tree[$pid] as $k => $row) {
                echo '<li>';
                echo $row['name'];
                if (isset($tree[$row['id']]))
                    $printTree($tree, $row['id']);
                echo '</li>';
            }
            echo '</ul>';
            echo "</div>";
        };
        $printTree($tree);
        //die();
    }
} 