<?php
//error_reporting(-1);
/*========= library ============*/

require 'libs/Bootstrap.php';
require 'libs/Response.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/View.php';
require 'libs/Db.php';
require 'libs/Session.php';

/*========= config =============*/

require 'config/db.php';
require 'config/path.php';

$app = new Bootstrap();
