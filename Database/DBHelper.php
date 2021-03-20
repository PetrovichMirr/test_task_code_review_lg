<?php

namespace Database;

/**
 * Тест класса  DBHelper
 *
 * @author petrovichmirr
 */
class DBHelper {

    /**
     * Возвращает экземпляр класса.
     *
     * @return this Экземпляр класса
     */
    public function __construct() {
        echo ' *** DBHelper instance created *** ';
    }

    /**
     * Тест метода.
     *
     * @return void
     */
    public function createTableIfNotExist() {
        echo ' *** DBHelper->createTableIfNotExist() *** ';
    }

    /**
     * Тест метода.
     *
     * @return mixed
     */
    public function checkExistsUrl($url) {
        echo " *** DBHelper->checkExistsUrl(url). url = $url *** ";
        //return 'resource';
        return false;
    }

    /**
     * Тест метода.
     *
     * @return mixed
     */
    public function createChangedLink($url, $changedUrl) {
        echo " *** DBHelper->createChangedLink(url, changedUrl). url = $url, changedUrl = $changedUrl *** ";
        return ' *** Test OK *** ';
    }

}
