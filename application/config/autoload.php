<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();
$autoload['libraries'] = array('database', 'session', 'encryption');
$autoload['drivers'] = array();
$autoload['helper'] = array('url', 'form', 'slug', 'date', 'file');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array('M_model', 'M_auth');
