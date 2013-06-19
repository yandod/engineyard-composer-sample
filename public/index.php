<pre>
<?php
require '../vendor/autoload.php';

use Monolog\Logger;
$obj = new Logger('sample');
var_dump(get_class($obj));
var_dump($obj);
?></pre>

