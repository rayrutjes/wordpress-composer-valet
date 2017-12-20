<?php

if (isset($_SERVER['HTTP_X_ORIGINAL_HOST'])) {
    // Used to share with ngrok.
    define('WP_HOME', 'http://' . $_SERVER['HTTP_X_ORIGINAL_HOST']);
} else {
    define('WP_HOME','http://mywebsite.test');
}

define( 'DB_NAME', 'dbname' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );

error_reporting(E_ALL);

define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG', true );
define( 'SCRIPT_DEBUG', true );

define('AUTH_KEY', '!b cBfynuw^m!-ZG{4{,}P#TzTzxGBm1_4X[%QZ%=s^>DeAN@`1YT5K}nn):BT%@');
define('SECURE_AUTH_KEY', 'QxW|Knfqt, 5lX{yo)=((`Rj-KP:|%:@R*dE-h$+p<T>hlY3d<bMsT=u9E$Bd}mJ');
define('LOGGED_IN_KEY', 'i[LsTo^HsYu1t1=xLCU=aN*1JBa{<24x`-F]g/NpBj|pL qzu}Y$pH8R,B8jXHyw');
define('NONCE_KEY', '-b]0OT]q= 4lEr:-~BD0k/7DuokYJ<R??N|KU~E]cjN5<|@{1Gm1qTu2V>a+0:K3');
define('AUTH_SALT', 'pPx>XK@HY8e-)]fxQ|/&jcKe#!1+L)B|wp1L]N+Q^ |[I>{{hkVTMv?r7q|a*E}i');
define('SECURE_AUTH_SALT', '/zl|}u0=iX(PgI%5g.JSjeJ|(.K72D[HU?ouyjr)yv#6A4EI9Ih-(7eM0c~G5swY');
define('LOGGED_IN_SALT', 'H>z%n9bGKdrd6;8Qu35BDu.A!+E >6/) 9.e$qf^ME[d4)=-KY-:ELP&baFf8spP');
define('NONCE_SALT', '[kj3q%db(u*unT-E=a n0%nqO>rg_K&U6Y@zKBn+d8!IH:=,54vMw5s[CAh9qU?7');
