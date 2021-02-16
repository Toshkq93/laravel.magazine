<?php


namespace App\Http\Helpers;


use App\Gallery;
use App\RelatedProduct;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductHelper
{
    public static function uploadImage(Request $request, $image = null)
    {
        if ($request->hasFile('img')) {
            if ($image) {
                Storage::delete($image);
            }
            $folder =date('Y-m-d') . "/$request->title/main";
            return $request->file('img')->store("$folder");
        }
        return null;
    }

    public static function uploadGallery(Request $request, $product)
    {
        $folder = date('Y-m-d') . "/$request->title/galleries";
        if ($request->hasFile('galleries')) {
            foreach ($request->file('galleries') as $key => $image) {
                $product->gallery()->updateOrCreate([
                    'product_id' => $product->id,
                    'img' => $image->store("$folder")
                ],[
                    'product_id' => $product->id,
                    'img' => $image->store("$folder")
                ]);
            }
        }
    }

    public static function deleteGallery($images)
    {
        if ($images) {
            foreach ($images as $image) {
                Storage::delete($image['img']);
                $image->delete();
            }
        }
        return null;
    }

    public static function saveRelated($productsRelated, $product, $delete = null)
    {
        foreach ($productsRelated as $key => $related){
            $product->relatedProducts()->updateOrCreate([
                'product_id' => $product->id
            ],[
                'product_id' => $product->id,
                'related_id' => $related
            ]);
        }

    }

    public static function deleteDirectory($titleProduct)
    {
        Storage::deleteDirectory($titleProduct);
    }

    public static function getImage($image)
    {
        if (!$image) {
            return asset("no-image.png");
        }
        return asset("uploads/{$image}");
    }

    public static function getDate($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y/m/d');
    }

}
