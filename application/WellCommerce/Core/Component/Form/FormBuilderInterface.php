<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Core\Component\Form;

/**
 * Interface FormBuilderInterface
 *
 * @package WellCommerce\Core\Component\Form
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
interface FormBuilderInterface
{
    /**
     * Initializes the form
     *
     * @return mixed
     */
    public function init();
} 