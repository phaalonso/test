<?php 

namespace PhpFromZero\Error;

use PhpFromZero\Error\BaseError;


/**
 * PDO error
 * 
 * @author Justin Dah-kenangnon <dah.kenangnon@gmail.com>
 * 
 * @link https://github.com/Dahkenangnon
 * @link https://Justin.Dah-kenangnon.com
 * @link https://Paonit.com
 * @link https://Dah-kenangnon.com
 */
class OrmError extends BaseError{

    public function __construct()
    {
        http_response_code(500);
    }
}