<?php

/*
 * Тест
 */

namespace task;

/**
 * Тест класса  DataHandler
 *
 * @author petrovichmirr
 */
class DataHandler {

    /**
     * Возвращает экземпляр класса.
     *
     * @param int $fieldsCount Параметр
     * @param int $chipCount Параметр
     * @return this Экземпляр класса
     */
    public function __construct($fieldsCount, $chipCount) {
        echo " *** DataHandler instance created. fieldsCount = $fieldsCount, chipCount = $chipCount *** ";
    }

    /**
     * Тест метода.
     *
     * @return mixed
     */
    public function goMission() {
        echo " *** DataHandler->goMission() *** ";
    }

}
