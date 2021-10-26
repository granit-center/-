
<?php
$name = $request->get('name', 'World');
$response->setContent(sprintf('hello %s',htmlspecialchars($name, ENT_QUOTES, 'UTF-8')));