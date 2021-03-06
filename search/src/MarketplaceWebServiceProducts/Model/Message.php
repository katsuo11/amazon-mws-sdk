<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     MarketplaceWebServiceProducts
 *  @copyright   Copyright 2008-2012 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2011-10-01
 */
/******************************************************************************* 
 * 
 *  Marketplace Web Service Products PHP5 Library
 * 
 */

/**
 *  @see MarketplaceWebServiceProducts_Model
 */

    

/**
 * MarketplaceWebServiceProducts_Model_Message
 * 
 * Properties:
 * <ul>
 * 
 * <li>Locale: string</li>
 * <li>Text: string</li>
 *
 * </ul>
 */ 
class MarketplaceWebServiceProducts_Model_Message extends MarketplaceWebServiceProducts_Model
{

    /**
     * Construct new MarketplaceWebServiceProducts_Model_Message
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>Locale: string</li>
     * <li>Text: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'Locale' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Text' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the Locale property.
     * 
     * @return string Locale
     */
    public function getLocale() 
    {
        return $this->_fields['Locale']['FieldValue'];
    }

    /**
     * Sets the value of the Locale property.
     * 
     * @param string Locale
     * @return this instance
     */
    public function setLocale($value) 
    {
        $this->_fields['Locale']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Locale and returns this instance
     * 
     * @param string $value Locale
     * @return MarketplaceWebServiceProducts_Model_Message instance
     */
    public function withLocale($value)
    {
        $this->setLocale($value);
        return $this;
    }


    /**
     * Checks if Locale is set
     * 
     * @return bool true if Locale  is set
     */
    public function isSetLocale()
    {
        return !is_null($this->_fields['Locale']['FieldValue']);
    }

    /**
     * Gets the value of the Text property.
     * 
     * @return string Text
     */
    public function getText() 
    {
        return $this->_fields['Text']['FieldValue'];
    }

    /**
     * Sets the value of the Text property.
     * 
     * @param string Text
     * @return this instance
     */
    public function setText($value) 
    {
        $this->_fields['Text']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Text and returns this instance
     * 
     * @param string $value Text
     * @return MarketplaceWebServiceProducts_Model_Message instance
     */
    public function withText($value)
    {
        $this->setText($value);
        return $this;
    }


    /**
     * Checks if Text is set
     * 
     * @return bool true if Text  is set
     */
    public function isSetText()
    {
        return !is_null($this->_fields['Text']['FieldValue']);
    }




}