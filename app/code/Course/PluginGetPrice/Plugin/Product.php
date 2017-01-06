<?php
/**
 * Product.php
 *
 * @category  Course
 * @package   Course_PluginGetPrice
 * @copyright Copyright (c) 2017 Alpine Consulting, Inc (www.alpineinc.com)
 * @author    jnodwell@alpineinc.com
 */

namespace Course\PluginGetPrice\Plugin;

use Magento\Catalog\Model\Product;

/**
 * Class Product
 *
 * @category Course
 * @package  Course_PluginGetPrice
 */
class Product
{
    /**
     * function afterGetPrice
     *
     * @param \Course\PluginGetPrice\Plugin\Product $subject
     * @param                                       $result
     *
     * @return mixed
     */
    public function afterGetPrice(Product $subject, $result)
    {
        return $result * 2;
    }
}