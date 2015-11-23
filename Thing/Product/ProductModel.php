<?php

namespace Bordeux\SchemaOrg\Thing\Product;

/**
 * Generated by bordeux/schema
 *
 * @author Krzysztof Bednarczyk <schema@bordeux.net>
 * @link http://schema.org/ProductModel
 *
 *
 * -------------------------------- IsVariantOf ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Product\ProductModel IsVariantOf
 *
 * @method \Bordeux\SchemaOrg\Thing\Product\ProductModel getIsVariantOf() A pointer to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive.
 *
 * @method ProductModel setIsVariantOf(\Bordeux\SchemaOrg\Thing\Product\ProductModel $isVariantOf )A pointer to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive.
 *
 *
 * -------------------------------- PredecessorOf ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Product\ProductModel PredecessorOf
 *
 * @method \Bordeux\SchemaOrg\Thing\Product\ProductModel getPredecessorOf() A pointer from a previous, often discontinued variant of the product to its newer variant.
 *
 * @method ProductModel setPredecessorOf(\Bordeux\SchemaOrg\Thing\Product\ProductModel $predecessorOf )A pointer from a previous, often discontinued variant of the product to its newer variant.
 *
 *
 * -------------------------------- SuccessorOf ---------------------------------------------
 *
 * @property \Bordeux\SchemaOrg\Thing\Product\ProductModel SuccessorOf
 *
 * @method \Bordeux\SchemaOrg\Thing\Product\ProductModel getSuccessorOf() A pointer from a newer variant of a product  to its previous, often discontinued predecessor.
 *
 * @method ProductModel setSuccessorOf(\Bordeux\SchemaOrg\Thing\Product\ProductModel $successorOf )A pointer from a newer variant of a product  to its previous, often discontinued predecessor.
 *
 *
 */
class ProductModel extends \Bordeux\SchemaOrg\Thing\Product
{
}
