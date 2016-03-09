<?php

/*
 * This file is part of Laravel Doorkeeper.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Doorkeeper\Contracts;

/**
 * Interface ListenerContract.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
interface ListenerContract
{
    /**
     * @param $model
     *
     * @return mixed
     */
    public function compare($model);
}
