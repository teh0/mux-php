<?php
/**
 * PlaybackPolicy
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  MuxPhp
 * @author   Mux API team
 * @link     https://docs.mux.com
 */

/**
 * Mux API
 *
 * Mux is how developers build online video. This API encompasses both Mux Video and Mux Data functionality to help you build your video-related projects better and faster than ever before.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MuxPhp\Models;
use \MuxPhp\ObjectSerializer;

/**
 * PlaybackPolicy Class Doc Comment
 *
 * @category Class
 * @package  MuxPhp
 * @author   Mux API team
 * @link     https://docs.mux.com
 */
class PlaybackPolicy
{
    /**
     * Possible values of this enum
     */
    const _PUBLIC = 'public';
    const SIGNED = 'signed';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_PUBLIC,
            self::SIGNED,
        ];
    }
}


