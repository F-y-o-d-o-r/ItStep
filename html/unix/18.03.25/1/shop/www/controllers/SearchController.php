<?php

/**
 * Контроллер CartController
 */
class SearchController
{

    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {
        // // Список категорий для левого меню
        // $categories = Category::getCategoriesList();

        // // Список последних товаров
        // $latestProducts = Product::getLatestProducts(6);

        // // Список товаров для слайдера
        // $sliderProducts = Product::getRecommendedProducts();

        // Подключаем вид
        require_once(ROOT . '/views/Serch/index.php');
        return true;
    }
}
