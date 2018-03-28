<?php
namespace Core;

use Zend\Diactoros\Response\HtmlResponse;
/**
 * Response Class
 */
class Response
{
    /**
     * URetourne une reponse html
     *
     * @param string $html
     * @param integer $status
     * @param array $headers
     * @return void
     */
    public static function html($html, $status = 200, array $headers = [])
    {
        return new HtmlResponse($html, $status, $headers);
    }
}
