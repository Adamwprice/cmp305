<?php
//// the following listing is to clarify the categories inside the database
//// 1. id - of the vehicle in the database
//// 2. make - of the vehicle in the database
//// 3. model - of the vehilce in database
//// 4. description - of the vechile in database
//// 5. colour - of vechile in database
//// 6. registration - of vechile in database
//// 7. price - of the vechile in database

class DB {

  private static $writeDBConnection;
  private static $readDBConnection;

  public static function connectWriteDB() {
    if (self::$writeDBConnection === null) {
      self::$writeDBConnection = new PDO('mysql:host=localhost:3308;dbname=db_carsapi;charset=utf8', 'root', '');
      self::$writeDBConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      self::$writeDBConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
    return self::$writeDBConnection;
  }

  public static function connectReadDB() {
    if (self::$readDBConnection === null) {
      self::$readDBConnection = new PDO('mysql:host=localhost:3308;dbname=db_carsapi;charset=utf8', 'root', '');
      self::$readDBConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      self::$readDBConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
    return self::$readDBConnection;
  }
}
?>
