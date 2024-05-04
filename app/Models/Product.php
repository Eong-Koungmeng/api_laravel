<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     title="Product",
 *     description="Product model",
 *     @OA\Property(
 *         property="id",
 *         description="ID of the product",
 *         type="integer",
 *         example=1
 *     ),
 *     @OA\Property(
 *         property="name",
 *         description="Name of the product",
 *         type="string",
 *         example="Product Name"
 *     ),
 *     @OA\Property(
 *         property="description",
 *         description="Description of the product",
 *         type="string",
 *         example="Product description"
 *     ),
 *     @OA\Property(
 *         property="price",
 *         description="Price of the product",
 *         type="number",
 *         format="float",
 *         example=10.99
 *     )
 * )
 */
class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price'
    ];
}
