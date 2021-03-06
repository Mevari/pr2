<?php
namespace app\components;

class Cart
{
    /**
     * Добавление товара в корзину (сессию)
     * @param int $id <p>id товара</p>
     * @return integer <p>Количество товаров в корзине</p>
     */
    public static function addProduct($id,$count)
    {
        // Приводим $id к типу integer
        $id = intval($id);
        // Пустой массив для товаров в корзине
        $productsInCart = array();
        // Если в корзине уже есть товары (они хранятся в сессии)
        if (isset($_SESSION['products'])) {
            // То заполним наш массив товарами
            $productsInCart = $_SESSION['products'];
        }
        // Проверяем есть ли уже такой товар в корзине
        if (array_key_exists($id, $productsInCart)) {
            // Если такой товар есть в корзине, но был добавлен еще раз, увеличим количество на 1
            $productsInCart[$id]+= $count;
        } else {
            // Если нет, добавляем id нового товара в корзину с количеством 1

            $productsInCart[$id] = 1;
        }

        // Записываем массив с товарами в сессию
        $_SESSION['products'] = $productsInCart;
        // Возвращаем количество товаров в корзине
        return self::countItems();
    }

    /**
     * удаление товара в корзине (сессию)
     * @param int $id <p>id товара</p>
     * @return integer <p>Количество товаров в корзине</p>
     */
    public static function DeleteProduct($id,$all = false)
    {
        // Приводим $id к типу integer

        $id = intval($id);
        // Пустой массив для товаров в корзине
        $productsInCart = array();
        // Если в корзине уже есть товары (они хранятся в сессии)
        if (isset($_SESSION['products'])) {
            // То заполним наш массив товарами
            $productsInCart = $_SESSION['products'];
        }
        // Проверяем есть ли уже такой товар в корзине
        if (array_key_exists($id, $productsInCart))
        {     // Если такой товар есть в корзине и не полное удаление, но уменьшаем количество на 1
            if( !$all && $productsInCart[$id]> 1 ) {
                $productsInCart[$id]--;
            }
            // Если полное удаление из корзины
            elseif ($all){
                unset($productsInCart[$id]);
            }
        }
        // Записываем массив с товарами в сессию
        $_SESSION['products'] = $productsInCart;
        // Возвращаем количество товаров в корзине
        return self::countItems();
    }


    public static function countItems()
    {
        // Проверка наличия товаров в корзине
        if (isset($_SESSION['products'])) {
            // Если массив с товарами есть
            // Подсчитаем и вернем их количество
            $count = 0;

            $id_item=array();
            foreach ($_SESSION['products'] as $id => $quantity) {
                array_push($id_item, $id);
                $count = $count + $quantity;
            }


            return $count;
        } else {
            // Если товаров нет, вернем 0
            return 0;
        }
    }
}