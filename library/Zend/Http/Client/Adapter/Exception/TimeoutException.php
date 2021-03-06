<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Http
 */

namespace Zend\Http\Client\Adapter\Exception;

/**
 *
 * @category  Zend
 * @package   Zend_Application
 */
class TimeoutException extends RuntimeException implements ExceptionInterface
{
    const READ_TIMEOUT = 1000;
}
