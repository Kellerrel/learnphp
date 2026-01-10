<?php

namespace App\Models;

use App\DB;

abstract class Model {
    public static $table;

    public static function all() {
        $db = new DB(__DIR__ . '/../../db.sqlite');
        return $db->all(static::$table , static::class);
    }
}