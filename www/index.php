<?php
require_once('init.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('unicorns_rocks.log', Logger::WARNING));

// Add records to the log
$log->addWarning('Unicorns not in place');
$log->addError('There are no unicorns present');
?>
<!DOCTYPE html>
  <head>
    <title>Netlight Unicorns</title>
  </head>
  <body>
    <h1>Hello Netlight!</h1>
    <p>I just wrote a few lines to <em>unicorns_rock.log</em></p>

    <p>This is from <strong><?php echo ENVIRONMENT; ?></strong></p>
  </body>
</html>