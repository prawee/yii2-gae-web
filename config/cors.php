<?php
/**
 * @Author: Prawee Wongsa <prawee.w@integra8t.com>
 * @Date: 8/2/2018 AD 11:16
 */
if (isset($_SERVER['HTTP_ORIGIN'])) {
    header('Access-Control-Allow-Origin: * ');
    header('Access-Control-Allow-Headers "Origin, X-Requested-With, Content-Type, Access-Control-Allow-Origin" ');
    header('Access-Control-Allow-Methods "PUT, GET, POST, DELETE, OPTIONS" ');
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');
}
