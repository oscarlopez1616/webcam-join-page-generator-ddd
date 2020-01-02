<?php
/**
 * This file is part of the prooph/service-bus.
 * (c) 2014-2018 prooph software GmbH <contact@prooph.de>
 * (c) 2015-2018 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Prooph\ServiceBus\Plugin\Guard;

class UnauthorizedException extends \RuntimeException
{
    /**
     * @var string
     */
    protected $message = 'You are not authorized to access this resource';

    public function __construct(string $messageName = '')
    {
        if (! empty($messageName)) {
            $this->message = 'You are not authorized to access the resource "' . $messageName . '"';
        }
    }
}
