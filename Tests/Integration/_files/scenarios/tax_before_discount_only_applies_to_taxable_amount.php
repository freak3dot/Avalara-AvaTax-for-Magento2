<?php
/**
 * ClassyLlama_AvaTax
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0), a
 * copy of which is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @copyright  Copyright (c) 2016 Avalara, Inc.
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

use Magento\Tax\Model\Calculation;
use ClassyLlama\AvaTax\Tests\Integration\Model\Tax\Sales\Total\Quote\SetupUtil;

$taxCalculationData['customer_tax_class'] = [
    'config_data' => [
        SetupUtil::CONFIG_OVERRIDES => $credentialsConfig,
    ],
    'quote_data' => [
        'customer_data' => [
            'tax_class_name' => SetupUtil::CUSTOMER_TAX_CLASS_2_NON_PROFIT
        ],
        'billing_address' => [
            'region_id' => SetupUtil::REGION_MI,
        ],
        'shipping_address' => [
            'region_id' => SetupUtil::REGION_MI,
        ],
        'shopping_cart_rules' => [
            [
                'discount_amount' => 20,
            ],
        ],
        'items' => [
            [
                'type' => \Magento\Catalog\Model\Product\Type::TYPE_SIMPLE,
                'sku' => 'simple1',
                'price' => 10,
                'qty' => 1,
            ],
        ],
    ],
    'expected_results' => [
        'compare_with_native_tax_calculation' => false,
        'address_data' => [
            'subtotal' => 10,
            'subtotal_incl_tax' => 10,
            'tax_amount' => 0,
            'grand_total' => 8,
        ],
        'items_data' => [
            'simple1' => [
                'row_total' => 10,
                'tax_percent' => 6,
                'price' => 10,
                'price_incl_tax' => 10,
                'row_total_incl_tax' => 10,
                'tax_amount' => 0,

                'discount_amount' => 2,
                'tax_before_discount' => 0,
            ],
        ],
    ],
];
