<?php
/**
 * ProductSize
 *
 * PHP version 5
 *
 * @category Class
 * @package  Tweak\Api
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * tweak-api
 *
 * Tweak API to integrate with all the Tweak services.  You can find out more about Tweak      at <a href='https://www.tweak.com'>https://www.tweak.com</a>, #tweak.
 *
 * OpenAPI spec version: 1.0.3-alpha.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * ProductSize Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Tweak\Api
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductSize implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProductSize';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'name' => 'string',
        'thumbnail' => 'string',
        'foldingType' => 'string',
        'foldingMethod' => 'string',
        'bindingType' => 'string',
        'doubleSided' => 'bool',
        'dieCut' => 'bool',
        'unfoldedSize' => '\Swagger\Client\Model\Dimensions',
        'foldedSize' => '\Swagger\Client\Model\Dimensions',
        'pdfSize' => '\Swagger\Client\Model\Dimensions',
        'pdfPageCount' => 'double',
        'pdfDpi' => 'double',
        'pdfColorProfile' => 'string',
        'customerSize' => '\Swagger\Client\Model\Dimensions',
        'customerPageCount' => 'double',
        'maxBleed' => '\Swagger\Client\Model\Bounds',
        'defaultBleed' => '\Swagger\Client\Model\Bounds',
        'safeArea' => '\Swagger\Client\Model\Bounds',
        'unit' => 'string',
        'frame' => 'double',
        'shape' => 'string',
        'orientation' => 'string',
        'format' => 'string',
        'envelopeWindow' => 'string',
        'canvasImageCount' => 'double',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'id' => 'string',
        'typeId' => 'string',
        'type' => '\Swagger\Client\Model\ProductType',
        'materials' => '\Swagger\Client\Model\ProductMaterial[]',
        'sizeMaterials' => '\Swagger\Client\Model\ProductSizeMaterial[]',
        'products' => '\Swagger\Client\Model\Product[]'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'name' => 'name',
        'thumbnail' => 'thumbnail',
        'foldingType' => 'foldingType',
        'foldingMethod' => 'foldingMethod',
        'bindingType' => 'bindingType',
        'doubleSided' => 'doubleSided',
        'dieCut' => 'dieCut',
        'unfoldedSize' => 'unfoldedSize',
        'foldedSize' => 'foldedSize',
        'pdfSize' => 'pdfSize',
        'pdfPageCount' => 'pdfPageCount',
        'pdfDpi' => 'pdfDpi',
        'pdfColorProfile' => 'pdfColorProfile',
        'customerSize' => 'customerSize',
        'customerPageCount' => 'customerPageCount',
        'maxBleed' => 'maxBleed',
        'defaultBleed' => 'defaultBleed',
        'safeArea' => 'safeArea',
        'unit' => 'unit',
        'frame' => 'frame',
        'shape' => 'shape',
        'orientation' => 'orientation',
        'format' => 'format',
        'envelopeWindow' => 'envelopeWindow',
        'canvasImageCount' => 'canvasImageCount',
        'created' => 'created',
        'modified' => 'modified',
        'id' => 'id',
        'typeId' => 'typeId',
        'type' => 'type',
        'materials' => 'materials',
        'sizeMaterials' => 'sizeMaterials',
        'products' => 'products'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'name' => 'setName',
        'thumbnail' => 'setThumbnail',
        'foldingType' => 'setFoldingType',
        'foldingMethod' => 'setFoldingMethod',
        'bindingType' => 'setBindingType',
        'doubleSided' => 'setDoubleSided',
        'dieCut' => 'setDieCut',
        'unfoldedSize' => 'setUnfoldedSize',
        'foldedSize' => 'setFoldedSize',
        'pdfSize' => 'setPdfSize',
        'pdfPageCount' => 'setPdfPageCount',
        'pdfDpi' => 'setPdfDpi',
        'pdfColorProfile' => 'setPdfColorProfile',
        'customerSize' => 'setCustomerSize',
        'customerPageCount' => 'setCustomerPageCount',
        'maxBleed' => 'setMaxBleed',
        'defaultBleed' => 'setDefaultBleed',
        'safeArea' => 'setSafeArea',
        'unit' => 'setUnit',
        'frame' => 'setFrame',
        'shape' => 'setShape',
        'orientation' => 'setOrientation',
        'format' => 'setFormat',
        'envelopeWindow' => 'setEnvelopeWindow',
        'canvasImageCount' => 'setCanvasImageCount',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'id' => 'setId',
        'typeId' => 'setTypeId',
        'type' => 'setType',
        'materials' => 'setMaterials',
        'sizeMaterials' => 'setSizeMaterials',
        'products' => 'setProducts'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'name' => 'getName',
        'thumbnail' => 'getThumbnail',
        'foldingType' => 'getFoldingType',
        'foldingMethod' => 'getFoldingMethod',
        'bindingType' => 'getBindingType',
        'doubleSided' => 'getDoubleSided',
        'dieCut' => 'getDieCut',
        'unfoldedSize' => 'getUnfoldedSize',
        'foldedSize' => 'getFoldedSize',
        'pdfSize' => 'getPdfSize',
        'pdfPageCount' => 'getPdfPageCount',
        'pdfDpi' => 'getPdfDpi',
        'pdfColorProfile' => 'getPdfColorProfile',
        'customerSize' => 'getCustomerSize',
        'customerPageCount' => 'getCustomerPageCount',
        'maxBleed' => 'getMaxBleed',
        'defaultBleed' => 'getDefaultBleed',
        'safeArea' => 'getSafeArea',
        'unit' => 'getUnit',
        'frame' => 'getFrame',
        'shape' => 'getShape',
        'orientation' => 'getOrientation',
        'format' => 'getFormat',
        'envelopeWindow' => 'getEnvelopeWindow',
        'canvasImageCount' => 'getCanvasImageCount',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'id' => 'getId',
        'typeId' => 'getTypeId',
        'type' => 'getType',
        'materials' => 'getMaterials',
        'sizeMaterials' => 'getSizeMaterials',
        'products' => 'getProducts'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const FOLDING_TYPE_NONE = 'none';
    const FOLDING_TYPE_ACCORDIAN_LEFT = 'accordian-left';
    const FOLDING_TYPE_ACCORDIAN_RIGHT = 'accordian-right';
    const FOLDING_TYPE_ACCORDION = 'accordion';
    const FOLDING_TYPE_LETTER_LEFT = 'letter-left';
    const FOLDING_TYPE_LETTER_RIGHT = 'letter-right';
    const FOLDING_TYPE_ROLLOVER = 'rollover';
    const FOLDING_METHOD_NONE = 'none';
    const FOLDING_METHOD_FOLD = 'fold';
    const FOLDING_METHOD_CREASE = 'crease';
    const FOLDING_METHOD_PREFOLDED = 'prefolded';
    const BINDING_TYPE_NONE = 'none';
    const BINDING_TYPE_SADDLE_STITCHED = 'saddle-stitched';
    const BINDING_TYPE_PERFECT = 'perfect';
    const BINDING_TYPE_SECTION_SEWN = 'section-sewn';
    const BINDING_TYPE_WIRO = 'wiro';
    const BINDING_TYPE_CASED_IN_WIRO = 'cased-in-wiro';
    const BINDING_TYPE_PAMPHLET_STITCHED = 'pamphlet-stitched';
    const BINDING_TYPE_COPTIC = 'coptic';
    const BINDING_TYPE_JAPANESE = 'japanese';
    const BINDING_TYPE_SCREW_POST = 'screw-post';
    const UNIT_MM = 'mm';
    const UNIT_INCH = 'inch';
    const SHAPE_RECT = 'rect';
    const SHAPE_SQUARE = 'square';
    const SHAPE_RECT_ROUDED_CORNERS = 'rect-rouded-corners';
    const SHAPE_SQUARE_ROUDED_CORNERS = 'square-rouded-corners';
    const SHAPE_OVAL = 'oval';
    const SHAPE_CIRCLE = 'circle';
    const ORIENTATION_NONE = 'none';
    const ORIENTATION_LANDSCAPE = 'landscape';
    const ORIENTATION_PORTRAIT = 'portrait';
    const FORMAT_EU = 'eu';
    const FORMAT_US = 'us';
    const ENVELOPE_WINDOW_NONE = 'none';
    const ENVELOPE_WINDOW_LEFT = 'left';
    const ENVELOPE_WINDOW_RIGHT = 'right';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFoldingTypeAllowableValues()
    {
        return [
            self::FOLDING_TYPE_NONE,
            self::FOLDING_TYPE_ACCORDIAN_LEFT,
            self::FOLDING_TYPE_ACCORDIAN_RIGHT,
            self::FOLDING_TYPE_ACCORDION,
            self::FOLDING_TYPE_LETTER_LEFT,
            self::FOLDING_TYPE_LETTER_RIGHT,
            self::FOLDING_TYPE_ROLLOVER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFoldingMethodAllowableValues()
    {
        return [
            self::FOLDING_METHOD_NONE,
            self::FOLDING_METHOD_FOLD,
            self::FOLDING_METHOD_CREASE,
            self::FOLDING_METHOD_PREFOLDED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getBindingTypeAllowableValues()
    {
        return [
            self::BINDING_TYPE_NONE,
            self::BINDING_TYPE_SADDLE_STITCHED,
            self::BINDING_TYPE_PERFECT,
            self::BINDING_TYPE_SECTION_SEWN,
            self::BINDING_TYPE_WIRO,
            self::BINDING_TYPE_CASED_IN_WIRO,
            self::BINDING_TYPE_PAMPHLET_STITCHED,
            self::BINDING_TYPE_COPTIC,
            self::BINDING_TYPE_JAPANESE,
            self::BINDING_TYPE_SCREW_POST,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getUnitAllowableValues()
    {
        return [
            self::UNIT_MM,
            self::UNIT_INCH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getShapeAllowableValues()
    {
        return [
            self::SHAPE_RECT,
            self::SHAPE_SQUARE,
            self::SHAPE_RECT_ROUDED_CORNERS,
            self::SHAPE_SQUARE_ROUDED_CORNERS,
            self::SHAPE_OVAL,
            self::SHAPE_CIRCLE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getOrientationAllowableValues()
    {
        return [
            self::ORIENTATION_NONE,
            self::ORIENTATION_LANDSCAPE,
            self::ORIENTATION_PORTRAIT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_EU,
            self::FORMAT_US,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getEnvelopeWindowAllowableValues()
    {
        return [
            self::ENVELOPE_WINDOW_NONE,
            self::ENVELOPE_WINDOW_LEFT,
            self::ENVELOPE_WINDOW_RIGHT,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['foldingType'] = isset($data['foldingType']) ? $data['foldingType'] : null;
        $this->container['foldingMethod'] = isset($data['foldingMethod']) ? $data['foldingMethod'] : null;
        $this->container['bindingType'] = isset($data['bindingType']) ? $data['bindingType'] : null;
        $this->container['doubleSided'] = isset($data['doubleSided']) ? $data['doubleSided'] : false;
        $this->container['dieCut'] = isset($data['dieCut']) ? $data['dieCut'] : false;
        $this->container['unfoldedSize'] = isset($data['unfoldedSize']) ? $data['unfoldedSize'] : null;
        $this->container['foldedSize'] = isset($data['foldedSize']) ? $data['foldedSize'] : null;
        $this->container['pdfSize'] = isset($data['pdfSize']) ? $data['pdfSize'] : null;
        $this->container['pdfPageCount'] = isset($data['pdfPageCount']) ? $data['pdfPageCount'] : 1.0;
        $this->container['pdfDpi'] = isset($data['pdfDpi']) ? $data['pdfDpi'] : 300.0;
        $this->container['pdfColorProfile'] = isset($data['pdfColorProfile']) ? $data['pdfColorProfile'] : '';
        $this->container['customerSize'] = isset($data['customerSize']) ? $data['customerSize'] : null;
        $this->container['customerPageCount'] = isset($data['customerPageCount']) ? $data['customerPageCount'] : 1.0;
        $this->container['maxBleed'] = isset($data['maxBleed']) ? $data['maxBleed'] : null;
        $this->container['defaultBleed'] = isset($data['defaultBleed']) ? $data['defaultBleed'] : null;
        $this->container['safeArea'] = isset($data['safeArea']) ? $data['safeArea'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['frame'] = isset($data['frame']) ? $data['frame'] : 0.0;
        $this->container['shape'] = isset($data['shape']) ? $data['shape'] : null;
        $this->container['orientation'] = isset($data['orientation']) ? $data['orientation'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['envelopeWindow'] = isset($data['envelopeWindow']) ? $data['envelopeWindow'] : null;
        $this->container['canvasImageCount'] = isset($data['canvasImageCount']) ? $data['canvasImageCount'] : 0.0;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['typeId'] = isset($data['typeId']) ? $data['typeId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['materials'] = isset($data['materials']) ? $data['materials'] : null;
        $this->container['sizeMaterials'] = isset($data['sizeMaterials']) ? $data['sizeMaterials'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        $allowed_values = array("none", "accordian-left", "accordian-right", "accordion", "letter-left", "letter-right", "rollover");
        if (!in_array($this->container['foldingType'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'foldingType', must be one of #{allowed_values}.";
        }

        $allowed_values = array("none", "fold", "crease", "prefolded");
        if (!in_array($this->container['foldingMethod'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'foldingMethod', must be one of #{allowed_values}.";
        }

        $allowed_values = array("none", "saddle-stitched", "perfect", "section-sewn", "wiro", "cased-in-wiro", "pamphlet-stitched", "coptic", "japanese", "screw-post");
        if (!in_array($this->container['bindingType'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'bindingType', must be one of #{allowed_values}.";
        }

        if (!is_null($this->container['pdfDpi']) && ($this->container['pdfDpi'] > 4800.0)) {
            $invalid_properties[] = "invalid value for 'pdfDpi', must be smaller than or equal to 4800.0.";
        }

        if (!is_null($this->container['pdfDpi']) && ($this->container['pdfDpi'] < 10.0)) {
            $invalid_properties[] = "invalid value for 'pdfDpi', must be bigger than or equal to 10.0.";
        }

        $allowed_values = array("mm", "inch");
        if (!in_array($this->container['unit'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'unit', must be one of #{allowed_values}.";
        }

        $allowed_values = array("rect", "square", "rect-rouded-corners", "square-rouded-corners", "oval", "circle");
        if (!in_array($this->container['shape'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'shape', must be one of #{allowed_values}.";
        }

        $allowed_values = array("none", "landscape", "portrait");
        if (!in_array($this->container['orientation'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'orientation', must be one of #{allowed_values}.";
        }

        if ($this->container['format'] === null) {
            $invalid_properties[] = "'format' can't be null";
        }
        $allowed_values = array("eu", "us");
        if (!in_array($this->container['format'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'format', must be one of #{allowed_values}.";
        }

        $allowed_values = array("none", "left", "right");
        if (!in_array($this->container['envelopeWindow'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'envelopeWindow', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['name'] === null) {
            return false;
        }
        $allowed_values = array("none", "accordian-left", "accordian-right", "accordion", "letter-left", "letter-right", "rollover");
        if (!in_array($this->container['foldingType'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("none", "fold", "crease", "prefolded");
        if (!in_array($this->container['foldingMethod'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("none", "saddle-stitched", "perfect", "section-sewn", "wiro", "cased-in-wiro", "pamphlet-stitched", "coptic", "japanese", "screw-post");
        if (!in_array($this->container['bindingType'], $allowed_values)) {
            return false;
        }
        if ($this->container['pdfDpi'] > 4800.0) {
            return false;
        }
        if ($this->container['pdfDpi'] < 10.0) {
            return false;
        }
        $allowed_values = array("mm", "inch");
        if (!in_array($this->container['unit'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("rect", "square", "rect-rouded-corners", "square-rouded-corners", "oval", "circle");
        if (!in_array($this->container['shape'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("none", "landscape", "portrait");
        if (!in_array($this->container['orientation'], $allowed_values)) {
            return false;
        }
        if ($this->container['format'] === null) {
            return false;
        }
        $allowed_values = array("eu", "us");
        if (!in_array($this->container['format'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("none", "left", "right");
        if (!in_array($this->container['envelopeWindow'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets thumbnail
     * @return string
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     * @param string $thumbnail
     * @return $this
     */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }

    /**
     * Gets foldingType
     * @return string
     */
    public function getFoldingType()
    {
        return $this->container['foldingType'];
    }

    /**
     * Sets foldingType
     * @param string $foldingType
     * @return $this
     */
    public function setFoldingType($foldingType)
    {
        $allowed_values = array('none', 'accordian-left', 'accordian-right', 'accordion', 'letter-left', 'letter-right', 'rollover');
        if (!in_array($foldingType, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'foldingType', must be one of 'none', 'accordian-left', 'accordian-right', 'accordion', 'letter-left', 'letter-right', 'rollover'");
        }
        $this->container['foldingType'] = $foldingType;

        return $this;
    }

    /**
     * Gets foldingMethod
     * @return string
     */
    public function getFoldingMethod()
    {
        return $this->container['foldingMethod'];
    }

    /**
     * Sets foldingMethod
     * @param string $foldingMethod
     * @return $this
     */
    public function setFoldingMethod($foldingMethod)
    {
        $allowed_values = array('none', 'fold', 'crease', 'prefolded');
        if (!in_array($foldingMethod, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'foldingMethod', must be one of 'none', 'fold', 'crease', 'prefolded'");
        }
        $this->container['foldingMethod'] = $foldingMethod;

        return $this;
    }

    /**
     * Gets bindingType
     * @return string
     */
    public function getBindingType()
    {
        return $this->container['bindingType'];
    }

    /**
     * Sets bindingType
     * @param string $bindingType
     * @return $this
     */
    public function setBindingType($bindingType)
    {
        $allowed_values = array('none', 'saddle-stitched', 'perfect', 'section-sewn', 'wiro', 'cased-in-wiro', 'pamphlet-stitched', 'coptic', 'japanese', 'screw-post');
        if (!in_array($bindingType, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'bindingType', must be one of 'none', 'saddle-stitched', 'perfect', 'section-sewn', 'wiro', 'cased-in-wiro', 'pamphlet-stitched', 'coptic', 'japanese', 'screw-post'");
        }
        $this->container['bindingType'] = $bindingType;

        return $this;
    }

    /**
     * Gets doubleSided
     * @return bool
     */
    public function getDoubleSided()
    {
        return $this->container['doubleSided'];
    }

    /**
     * Sets doubleSided
     * @param bool $doubleSided
     * @return $this
     */
    public function setDoubleSided($doubleSided)
    {
        $this->container['doubleSided'] = $doubleSided;

        return $this;
    }

    /**
     * Gets dieCut
     * @return bool
     */
    public function getDieCut()
    {
        return $this->container['dieCut'];
    }

    /**
     * Sets dieCut
     * @param bool $dieCut
     * @return $this
     */
    public function setDieCut($dieCut)
    {
        $this->container['dieCut'] = $dieCut;

        return $this;
    }

    /**
     * Gets unfoldedSize
     * @return \Swagger\Client\Model\Dimensions
     */
    public function getUnfoldedSize()
    {
        return $this->container['unfoldedSize'];
    }

    /**
     * Sets unfoldedSize
     * @param \Swagger\Client\Model\Dimensions $unfoldedSize
     * @return $this
     */
    public function setUnfoldedSize($unfoldedSize)
    {
        $this->container['unfoldedSize'] = $unfoldedSize;

        return $this;
    }

    /**
     * Gets foldedSize
     * @return \Swagger\Client\Model\Dimensions
     */
    public function getFoldedSize()
    {
        return $this->container['foldedSize'];
    }

    /**
     * Sets foldedSize
     * @param \Swagger\Client\Model\Dimensions $foldedSize
     * @return $this
     */
    public function setFoldedSize($foldedSize)
    {
        $this->container['foldedSize'] = $foldedSize;

        return $this;
    }

    /**
     * Gets pdfSize
     * @return \Swagger\Client\Model\Dimensions
     */
    public function getPdfSize()
    {
        return $this->container['pdfSize'];
    }

    /**
     * Sets pdfSize
     * @param \Swagger\Client\Model\Dimensions $pdfSize
     * @return $this
     */
    public function setPdfSize($pdfSize)
    {
        $this->container['pdfSize'] = $pdfSize;

        return $this;
    }

    /**
     * Gets pdfPageCount
     * @return double
     */
    public function getPdfPageCount()
    {
        return $this->container['pdfPageCount'];
    }

    /**
     * Sets pdfPageCount
     * @param double $pdfPageCount
     * @return $this
     */
    public function setPdfPageCount($pdfPageCount)
    {
        $this->container['pdfPageCount'] = $pdfPageCount;

        return $this;
    }

    /**
     * Gets pdfDpi
     * @return double
     */
    public function getPdfDpi()
    {
        return $this->container['pdfDpi'];
    }

    /**
     * Sets pdfDpi
     * @param double $pdfDpi
     * @return $this
     */
    public function setPdfDpi($pdfDpi)
    {

        if ($pdfDpi > 4800.0) {
            throw new \InvalidArgumentException('invalid value for $pdfDpi when calling ProductSize., must be smaller than or equal to 4800.0.');
        }
        if ($pdfDpi < 10.0) {
            throw new \InvalidArgumentException('invalid value for $pdfDpi when calling ProductSize., must be bigger than or equal to 10.0.');
        }
        $this->container['pdfDpi'] = $pdfDpi;

        return $this;
    }

    /**
     * Gets pdfColorProfile
     * @return string
     */
    public function getPdfColorProfile()
    {
        return $this->container['pdfColorProfile'];
    }

    /**
     * Sets pdfColorProfile
     * @param string $pdfColorProfile
     * @return $this
     */
    public function setPdfColorProfile($pdfColorProfile)
    {
        $this->container['pdfColorProfile'] = $pdfColorProfile;

        return $this;
    }

    /**
     * Gets customerSize
     * @return \Swagger\Client\Model\Dimensions
     */
    public function getCustomerSize()
    {
        return $this->container['customerSize'];
    }

    /**
     * Sets customerSize
     * @param \Swagger\Client\Model\Dimensions $customerSize
     * @return $this
     */
    public function setCustomerSize($customerSize)
    {
        $this->container['customerSize'] = $customerSize;

        return $this;
    }

    /**
     * Gets customerPageCount
     * @return double
     */
    public function getCustomerPageCount()
    {
        return $this->container['customerPageCount'];
    }

    /**
     * Sets customerPageCount
     * @param double $customerPageCount
     * @return $this
     */
    public function setCustomerPageCount($customerPageCount)
    {
        $this->container['customerPageCount'] = $customerPageCount;

        return $this;
    }

    /**
     * Gets maxBleed
     * @return \Swagger\Client\Model\Bounds
     */
    public function getMaxBleed()
    {
        return $this->container['maxBleed'];
    }

    /**
     * Sets maxBleed
     * @param \Swagger\Client\Model\Bounds $maxBleed
     * @return $this
     */
    public function setMaxBleed($maxBleed)
    {
        $this->container['maxBleed'] = $maxBleed;

        return $this;
    }

    /**
     * Gets defaultBleed
     * @return \Swagger\Client\Model\Bounds
     */
    public function getDefaultBleed()
    {
        return $this->container['defaultBleed'];
    }

    /**
     * Sets defaultBleed
     * @param \Swagger\Client\Model\Bounds $defaultBleed
     * @return $this
     */
    public function setDefaultBleed($defaultBleed)
    {
        $this->container['defaultBleed'] = $defaultBleed;

        return $this;
    }

    /**
     * Gets safeArea
     * @return \Swagger\Client\Model\Bounds
     */
    public function getSafeArea()
    {
        return $this->container['safeArea'];
    }

    /**
     * Sets safeArea
     * @param \Swagger\Client\Model\Bounds $safeArea
     * @return $this
     */
    public function setSafeArea($safeArea)
    {
        $this->container['safeArea'] = $safeArea;

        return $this;
    }

    /**
     * Gets unit
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     * @param string $unit
     * @return $this
     */
    public function setUnit($unit)
    {
        $allowed_values = array('mm', 'inch');
        if (!in_array($unit, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'unit', must be one of 'mm', 'inch'");
        }
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets frame
     * @return double
     */
    public function getFrame()
    {
        return $this->container['frame'];
    }

    /**
     * Sets frame
     * @param double $frame
     * @return $this
     */
    public function setFrame($frame)
    {
        $this->container['frame'] = $frame;

        return $this;
    }

    /**
     * Gets shape
     * @return string
     */
    public function getShape()
    {
        return $this->container['shape'];
    }

    /**
     * Sets shape
     * @param string $shape
     * @return $this
     */
    public function setShape($shape)
    {
        $allowed_values = array('rect', 'square', 'rect-rouded-corners', 'square-rouded-corners', 'oval', 'circle');
        if (!in_array($shape, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'shape', must be one of 'rect', 'square', 'rect-rouded-corners', 'square-rouded-corners', 'oval', 'circle'");
        }
        $this->container['shape'] = $shape;

        return $this;
    }

    /**
     * Gets orientation
     * @return string
     */
    public function getOrientation()
    {
        return $this->container['orientation'];
    }

    /**
     * Sets orientation
     * @param string $orientation
     * @return $this
     */
    public function setOrientation($orientation)
    {
        $allowed_values = array('none', 'landscape', 'portrait');
        if (!in_array($orientation, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'orientation', must be one of 'none', 'landscape', 'portrait'");
        }
        $this->container['orientation'] = $orientation;

        return $this;
    }

    /**
     * Gets format
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     * @param string $format
     * @return $this
     */
    public function setFormat($format)
    {
        $allowed_values = array('eu', 'us');
        if (!in_array($format, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'format', must be one of 'eu', 'us'");
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets envelopeWindow
     * @return string
     */
    public function getEnvelopeWindow()
    {
        return $this->container['envelopeWindow'];
    }

    /**
     * Sets envelopeWindow
     * @param string $envelopeWindow
     * @return $this
     */
    public function setEnvelopeWindow($envelopeWindow)
    {
        $allowed_values = array('none', 'left', 'right');
        if (!in_array($envelopeWindow, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'envelopeWindow', must be one of 'none', 'left', 'right'");
        }
        $this->container['envelopeWindow'] = $envelopeWindow;

        return $this;
    }

    /**
     * Gets canvasImageCount
     * @return double
     */
    public function getCanvasImageCount()
    {
        return $this->container['canvasImageCount'];
    }

    /**
     * Sets canvasImageCount
     * @param double $canvasImageCount
     * @return $this
     */
    public function setCanvasImageCount($canvasImageCount)
    {
        $this->container['canvasImageCount'] = $canvasImageCount;

        return $this;
    }

    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param \DateTime $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets modified
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     * @param \DateTime $modified
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets typeId
     * @return string
     */
    public function getTypeId()
    {
        return $this->container['typeId'];
    }

    /**
     * Sets typeId
     * @param string $typeId
     * @return $this
     */
    public function setTypeId($typeId)
    {
        $this->container['typeId'] = $typeId;

        return $this;
    }

    /**
     * Gets type
     * @return \Swagger\Client\Model\ProductType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param \Swagger\Client\Model\ProductType $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets materials
     * @return \Swagger\Client\Model\ProductMaterial[]
     */
    public function getMaterials()
    {
        return $this->container['materials'];
    }

    /**
     * Sets materials
     * @param \Swagger\Client\Model\ProductMaterial[] $materials
     * @return $this
     */
    public function setMaterials($materials)
    {
        $this->container['materials'] = $materials;

        return $this;
    }

    /**
     * Gets sizeMaterials
     * @return \Swagger\Client\Model\ProductSizeMaterial[]
     */
    public function getSizeMaterials()
    {
        return $this->container['sizeMaterials'];
    }

    /**
     * Sets sizeMaterials
     * @param \Swagger\Client\Model\ProductSizeMaterial[] $sizeMaterials
     * @return $this
     */
    public function setSizeMaterials($sizeMaterials)
    {
        $this->container['sizeMaterials'] = $sizeMaterials;

        return $this;
    }

    /**
     * Gets products
     * @return \Swagger\Client\Model\Product[]
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     * @param \Swagger\Client\Model\Product[] $products
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Tweak\Api\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Tweak\Api\ObjectSerializer::sanitizeForSerialization($this));
    }
}


