<?php
## INDEX.PHP

require_once './functions/functions.php';

if (requestCheck('GET')) {
   require_once './templates/frontend/layout.php';
}