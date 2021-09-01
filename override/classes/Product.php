<?php
/**
 * Override Class ProductCore
 */
class Product extends ProductCore {

	public $is_top;
	public $has_fast_shipping;
	public $is_eko;
	public $is_good_price;
	public $is_made_in_lt;
	public $is_recommended;
	public $description_plus;
	public $description_plus_lang;
	public $description_plus_lang_wysiwyg;
		 
	public function __construct($id_product = null, $full = false, $id_lang = null, $id_shop = null, Context $context = null){
	 
			self::$definition['fields']['is_top'] = [
	            'type' => self::TYPE_INT,
	            'required' => false
	        ];
            self::$definition['fields']['has_fast_shipping'] = [
                'type' => self::TYPE_INT,
                'required' => false
            ];
            self::$definition['fields']['is_eko'] = [
                'type' => self::TYPE_INT,
                'required' => false
            ];
            self::$definition['fields']['is_good_price'] = [
                'type' => self::TYPE_INT,
                'required' => false
            ];
            self::$definition['fields']['is_made_in_lt'] = [
                'type' => self::TYPE_INT,
                'required' => false
            ];
            self::$definition['fields']['is_recommended'] = [
                'type' => self::TYPE_INT,
                'required' => false
            ];
            self::$definition['fields']['description_plus'] = [
                'type' => self::TYPE_STRING,
                'required' => false, 'size' => 255
            ];
            self::$definition['fields']['description_plus_lang'] = [
                'type' => self::TYPE_STRING,
                'lang' => true,
                'required' => false, 'size' => 255
            ];
            self::$definition['fields']['description_plus_lang_wysiwyg'] = [
                'type' => self::TYPE_HTML,
                'lang' => true,
                'required' => false,
                'validate' => 'isCleanHtml'
            ];

	        parent::__construct($id_product, $full, $id_lang, $id_shop, $context);
	}
}