<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductAttributes;
use App\ProductVaritions;
use App\Product;
use Session;

class ProductAttributesAndVariationsController extends Controller
{
    public function attributes(Product $id)
    {
        $title = 'Manage Product Variations';
        $productAttr = ProductAttributes::where('product_id', $id->id)->get();
        return view('admin.products.variable-product', compact('id', 'title', 'productAttr'));
    }

    public function addAttributes($id) {
    	$productAttr = ProductAttributes::where('product_id', $id)->get();
    	if($productAttr->count() == 2 ) {
    		return response()->json(["error" => "You can't add more than 2 Product Attributes!"]);
    	} else {
    		return response()->json(["success" => "Product Attributes added!"]);
    	}
    }

    public function saveAttributes(Request $request)
    {   
        $product_id = $request->id; 
        $names      = $request->attributeName;
        $values     = $request->attributeValues;

		if(ProductAttributes::where('product_id', $product_id)->count() !== 2) {
		   	foreach ($names as $index => $name) {
	            ProductAttributes::updateOrCreate([
	                'product_id' => $product_id,
	                'name'       => $name,
	                'values'     => explode(',' , $values[$index]),
	            ]);
	        }
	        return response()->json(["success" => "Attributes Addedd Successfully!"]);
    	} else {
    		return response()->json(["info" => "Attributes already saved"]);
    	}
    }

    public function updateAttributes(Request $request)
    {
        $idArr      = $request->id;
        $nameArr    = $request->name;
        $valueArr   = $request->value;
        $product_id   = $request->product_id;

        foreach($idArr as $index => $id) {
            $attr = ProductAttributes::find($id);
            $attr->update([
                'product_id' =>  $product_id,
                'name'       => $nameArr[$index],
                'values'     => explode(',' , $valueArr[$index]),
            ]);
        }
        return response()->json(["success" => "Attributes updated Successfully!"]);
    }

    public function deleteAttr(ProductAttributes $id)
    {
    	if($id) {
    		$id->delete();
            Session::flash('info', 'Attribute deleted successfully!');
            return redirect()->back(); 
    	} else {
            Session::flash('error', 'Something went wrong please try again later!');
            return redirect()->back();
        }
    }

    public function createVariation(Product $id)
    {
        $attributes = $id->productAttributes;
        if($attributes && isset($attributes) && $attributes->count() !== 0){
            $attributesCount = $attributes->count();
            if($attributesCount == 1) {
                // simple create variations and save into database
                $productAttributes = ProductAttributes::where('product_id', $id->id)->get();
                foreach($productAttributes as $singleRowAttr){
                    foreach($singleRowAttr->values as $data){
                        $row = ProductVaritions::create([
                        'product_id'        => $id->id,
                        'title'             => $data,
                        'sku'               => '000',  
                        'stock'             => 'null',
                        'retailPrice'       => '0.00',
                        'wholesalePrice'    => null,
                    ]);    
                    }
                }
                return redirect()->back();
                Session::flash('success', 'Variations Added Successfully');
            } else {
                //  Create Variations
                $productAttributes1 = ProductAttributes::where('product_id', $id->id)->limit(1)->get();
                $productAttributes2 = ProductAttributes::where('product_id', $id->id)->skip(1)->limit(1)->get();
                foreach($productAttributes1 as $Attr1){
                     
                }  
                foreach($productAttributes2 as $Attr2){
                     
                }
                $variants = [
                     $Attr1->name => $Attr1->values,
                     $Attr2->name => $Attr2->values,
                ];
                $result = [];
                foreach ($variants as $key => $set) {
                    foreach ($set as $entry) {
                        $result[] = [$key => $entry];
                    }
                    break;
                }
                array_shift($variants);

                foreach($variants as $setKey => $set) {
                    $buffer = $result;
                    $result = [];

                    foreach ($set as $entry) {

                        foreach ($buffer as $buf) {
                            $result[] = array_merge($buf, [$setKey => $entry]);
                        }
                    }
                }
                // storing variations in database
                foreach($result as $index => $variation)
                {
                    $productVaritions = ProductVaritions::create([
                        'product_id'        => $id->id,
                        'title'             => implode(' ', $variation),
                        'sku'               => '000',  
                        'stock'             => 'null',
                        'retailPrice'       => '0.00',
                        'wholesalePrice'    => null,
                    ]);
                }
                return redirect()->back();
                Session::flash('success', 'Variations Added Successfully');
            }
        }
    }

    public function recreateVariation(Product $id)
    {
        $deleteExisting = ProductVaritions::where('product_id', $id->id)->delete();
        // dd($id->productAttributes);
        $this->createVariation($id);
        return redirect()->back();
    }

    public function deleteVariation(ProductVaritions $id)
    {
        $id->delete();
        return redirect()->back();
        Session::flash('info', 'Variation deleted Successfully');
    }

    public function updateVariations(Request $request, $id)
    {
        //$product_id = $request->product_id;
        $skuArr = $request->sku;
        $stockArr = $request->stock;
        $retailPriceArr = $request->retailPrice;
        $wholesalePriceArr = $request->wholesalePrice;
        $VariationIdArr = $request->variationIds;

        foreach($VariationIdArr as $index => $varId){
            $productVariations = ProductVaritions::find($varId);

               $productVariations->update([
                'sku'           => $skuArr[$index],
                'stock'         => $stockArr[$index],
                'retailPrice'   => $retailPriceArr[$index],
                'wholesalePrice'=> $wholesalePriceArr[$index],
               ]);
        }
        return response()->json(["success" => "Variations updated Successfully!"]);
    }
}
