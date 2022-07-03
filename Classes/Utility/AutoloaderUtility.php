<?php


namespace SCHOENBECK\CorsMiddleware\Utility;


class AutoloaderUtility
{

    public static function getAutoloaderConfiguration(): array
    {
        return [
            'BackendLayout',
            'StaticTyposcript',
            'ContentObjects',
            'SmartObjects',
            'TcaFiles',
            'FlexForms',
            'FluidNamespace',
            'Slots',
            'Plugins',
            'Icon',
        ];
    }

}