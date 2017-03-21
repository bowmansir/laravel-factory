<?php
namespace App\Services;

use Exception;

class LogisticsFactory
{
    public static function create($companyName)
    {
        switch ($companyName) {
            case 'BlackCat':
                return new BlackCat();
            case 'Hsinchu':
                return new Hsinchu();
            case 'PostOffice':
                return new PostOffice();
            default:
                throw new Exception('No company exception');
        }
    }
}