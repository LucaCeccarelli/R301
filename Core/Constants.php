<?php

// Rappel : nous sommes dans le répertoire Core, voilà pourquoi dans realpath je "remonte d'un cran" pour faire référence
// à la VRAIE racine de mon application

final class Constants
{
    // Les constantes relatives aux chemins

    const VIEW_DIRECTORY        = '/Views/';

    const MODEL_DIRECTORY      = '/Model/';

    const CORE_DIRECTORY       = '/Core/';

    const EXCEPTIONS_DIRECTORY  = '/Core/Exceptions/';

    const CONTROLLERS_DIRECTORY = '/Controllers/';
    
    const DATABASE_DIRECTORY = '/Core/Database/';
    const PHPMAILER_DIRECTORY = '/Core/Phpmailer/';


    public static function rootDirectory() {
        return realpath(__DIR__ . '/../');
    }

    public static function coreDirectory() {
        return self::rootDirectory() . self::CORE_DIRECTORY;
    }

    public static function exceptionsDirectory() {
        return self::rootDirectory() . self::EXCEPTIONS_DIRECTORY;
    }

    public static function viewsDirectory() {
        return self::rootDirectory() . self::VIEW_DIRECTORY;
    }

    public static function modelDirectory() {
        return self::rootDirectory() . self::MODEL_DIRECTORY;
    }

    public static function controllersDirectory() {
        return self::rootDirectory() . self::CONTROLLERS_DIRECTORY;
    }
    public static function databseDirectory() {
        return self::rootDirectory() . self::DATABASE_DIRECTORY;
    }

    public static function phpMailerDirectory() {
        return self::rootDirectory() . self::PHPMAILER_DIRECTORY;
    }
}
