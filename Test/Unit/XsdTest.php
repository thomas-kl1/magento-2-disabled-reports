<?php

/**
 * Blackbird Promotion Hour Module
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@bird.eu so we can send you a copy immediately.
 *
 * @category            Blackbird
 * @package		Blackbird_PromotionHour
 * @copyright           Copyright (c) 2015 Blackbird (http://black.bird.eu)
 * @author		Blackbird Team
 * @license		http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Blackbird\Optimisation\Test\Unit;

use Magento\Framework\TestFramework\Unit\Utility\XsdValidator;

class XsdTest extends \PHPUnit_Framework_TestCase {
    
    protected $_xsdValidator;
    
    public function setUp()
    {
        $this->_xsdValidator = new XsdValidator();
    }
    
    /**
     * @dataProvider XmlSchemaDataProvider
     */
    public function testXsd($xml, $schema)
    {
        $xmlContent = file_get_contents($xml);
        $this->_xsdValidator->validate($schema, $xmlContent);
    }
    
    /**
     * DataProvider, return xml files and there xsd schema
     * 
     * @return array
     */
    public function XmlSchemaDataProvider()
    {
        $etc = BP . '/app/code/Blackbird/Optimisation/etc';
        $lib = BP . '/lib/internal/Magento/Framework';
        $xsdModule = $lib . '/Module/etc/module.xsd';
        $xsdEvents = $lib . '/Event/etc/events.xsd';
        
        $arr = [
            [$etc . '/module.xml', $xsdModule],
            [$etc . '/frontend/events.xml', $xsdEvents]
        ];
        
        return $arr;
    }
    
}
