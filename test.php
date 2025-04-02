<?php
// Устанавливаем корректную кодировку для вывода в браузер
header('Content-Type: text/html; charset=UTF-8');

// 1. Считываем файл test.xml
$xmlString = file_get_contents('test.xml');

// 2. Парсим содержимое с помощью SimpleXML
$xml = simplexml_load_string($xmlString);

// Проверим, что парсинг прошёл успешно
if (!$xml) {
    die('Ошибка при чтении или парсинге XML-файла.');
}

// Функция для «приведения в порядок» строк (вопросов и ответов)
function formatText($text) {
    // а) Удаляем повторяющиеся пробелы
    $text = preg_replace('/\s+/', ' ', $text);
    // б) Удаляем пробелы в начале и конце строки
    $text = trim($text);
    // в) Делаем первый символ заглавным (учитываем UTF-8)
    // Можно использовать mb_strtoupper(mb_substr(...)) и т.д.
    // Но для простоты воспользуемся ucfirst, если нет строгих требований к Unicode:
    $text = ucfirst($text);
    // г) Преобразуем спецсимволы в HTML-сущности
    // ENT_QUOTES – чтобы и кавычки преобразовать
    $text = htmlspecialchars($text, ENT_QUOTES);
    
    return $text;
}

// 3. Генерируем нумерацию и вывод
$questionNumber = 1;
foreach ($xml->question as $question) {
    // Получаем текст вопроса
    $questionText = (string) $question->name;
    $questionText = formatText($questionText);

    // Выводим вопрос
    echo $questionNumber . '. ' . $questionText . '<br>';

    // Нумерация ответов
    $answerNumber = 1;
    foreach ($question->answer as $answer) {
        $answerText = (string) $answer;
        $answerText = formatText($answerText);

        // Выводим ответ
        echo $questionNumber . '.' . $answerNumber . ' ' . $answerText . '<br>';
        $answerNumber++;
    }

    $questionNumber++;
}
?>
