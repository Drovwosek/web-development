PROGRAM Response(INPUT, OUTPUT);

USES
  DOS;

BEGIN
  WRITELN('Content-Type:text/plain');//формат передачи данных(текст)
  WRITELN;
  WRITELN(GETENV('REQUEST_METHOD'));// Запрашиваем метод запроса 
  WRITELN(GETENV('QUERY_STRING'));// Строка со всеми переменными
  WRITELN(GETENV('CONTENT_LENGTH'));// размер пересылаемого тела в байтах
  WRITELN(GETENV('HTTP_USER_AGENT'));// строка с именем браузера, посылаемая в запросе
  WRITELN(GETENV('HTTP_HOST'));// выкидывает инфу про машинку пользователя
END.
