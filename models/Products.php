<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $product_id
 * @property integer $cat_id
 * @property integer $brand_id
 * @property string $Product_title
 * @property integer $product_price
 * @property string $product_image
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_id', 'brand_id', 'Product_title', 'product_price', 'product_image'], 'required'],
            [['cat_id', 'brand_id', 'product_price'], 'integer'],
            [['Product_title', 'product_image'], 'string'],
			 
			 [['product_image'],'file','extensions' => 'png, jpg, gif'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'cat_id' => 'Cat ID',
            'brand_id' => 'Brand ID',
            'Product_title' => 'Product Title',
            'product_price' => 'Product Price',
            'product_image' => 'Product Image',
        ];
    }
}
