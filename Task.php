<?php

// Небольшое лирическое отступление:
// у меня, возможно, слишком много замечаний "не совсем в тему",
// постарался взглянуть на код более широким взглядом.
// Самой логики кода я не касаюсь, потому как мне не известна задача, которую решает этот код.
//
// Наименования пространств имён принято писать с большой буквы,
// т.е., Task
// Возможно, лучшим решением будет строить иерархию пространства имён
// от одного корня, например \App\Task
// Пространство имён и класс имеют одно и то же имя, это не критично,
// но подозрительно в плане архитектуры :)

namespace task;

class Task {

    // Свойство не используется
    // Скорее всего, вместо подразумевалось $dataHandler
    private $fileHandler;

    public function __construct($fieldsCount, $chipCount) {
        if ($this->validate($fieldsCount, $chipCount)) {

            // Свойство $dataHandler не определено в классе,
            // но ошибки скрипта на этой строке не возникнет - свойство создаётся динамически.
            // При этом применяется область видимости по умолчанию - публичная.
            // Как правило, в большинстве случаев,
            // свойства не должны иметь область видимости public
            //
            // Решение - определить свойство $dataHandler в классе как приватное (private)
            $this->dataHandler = new DataHandler((int) $fieldsCount, (int) $chipCount);
        } else {
            // Сразу выбрасывать исключение? Если бизнес-логика того требует, то лады.
            throw new \Exception('input error');
        }
    }

    // Опять же, то же самое:
    // Свойство $chipCount не определено в классе,
    // но ошибки скрипта на этой строке не возникнет - свойство создаётся динамически.
    // При этом применяется область видимости по умолчанию - публичная.
    // Как правило, в большинстве случаев,
    // свойства не должны иметь область видимости public
    //
    // Решение - определить свойство $chipCount в классе как приватное (private)
    //
    // Второй момент - если бизнес-логика позволяет,
    // возможно, в конструктор имеет сысл добавить строку:
    // $this->chipCount = $chipCount; или $this->setChipCount($chipCount);
    public function setChipCount($chipCount) {
        $this->chipCount = $chipCount;
    }

    public function validate($fieldsCount, $chipCount) {
        $isTrueType = is_numeric($fieldsCount) && is_numeric($chipCount);
        $isTrueNumber = (int) $fieldsCount > (int) $chipCount;
        return $isTrueNumber && $isTrueType;
    }

    public function start() {
        $this->dataHandler->goMission();
        die;
    }

}
