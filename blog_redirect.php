<?php
header('Status: HTTP/1.1 301 Moved Permanently');
header('Location: http://www.mikenaberezny.com/' . $_GET['path']);
