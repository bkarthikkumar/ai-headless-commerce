<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Get all products.
     */
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Laptop',
                'price' => 75000,
            ],
            [
                'id' => 2,
                'name' => 'Keyboard',
                'price' => 2500,
            ],
            [
                'id' => 3,
                'name' => 'Mouse',
                'price' => 1200,
            ],
        ];

        return response()->json([
            'data' => $products,
        ]);
    }

    /**
     * Get a single product by ID.
     */
    public function show(int $id)
    {
        $products = [
            [
                'id' => 1,
                'name' => 'Laptop',
                'price' => 75000,
            ],
            [
                'id' => 2,
                'name' => 'Keyboard',
                'price' => 2500,
            ],
            [
                'id' => 3,
                'name' => 'Mouse',
                'price' => 1200,
            ],
        ];

        $product = collect($products)->firstWhere('id', (int) $id);

        if (!$product) {
            return response()->json([
                'message' => 'Product not found',
            ], 404);
        }

        return response()->json([
            'data' => $product,
        ]);
    }

    /**
     * Create a product.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        return response()->json([
            'message' => 'Product received',
            'data' => $validated,
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        $products = [
            ['id' => 1, 'name' => 'Laptop', 'price' => 75000],
            ['id' => 2, 'name' => 'Keyboard', 'price' => 2500],
            ['id' => 3, 'name' => 'Mouse', 'price' => 1200],
        ];

        $product = collect($products)->firstWhere('id', (int) $id);

        if (!$product) {
            return response()->json([
                'message' => 'Product not found',
            ], 404);
        }

        $product['name'] = $validated['name'];
        $product['price'] = $validated['price'];

        $products = collect($products)->map(function ($p) use ($product) {
            return $p['id'] === $product['id'] ? $product : $p;
        })->toArray();

        return response()->json([
            'message' => 'Product updated successfully',
            'data' => $product,
            'all_products' => $products,
        ]);
    }

    public function destroy($id)
    {
        $products = [
            ['id' => 1, 'name' => 'Laptop', 'price' => 75000],
            ['id' => 2, 'name' => 'Keyboard', 'price' => 2500],
            ['id' => 3, 'name' => 'Mouse', 'price' => 1200],
        ];

        $product = collect($products)->firstWhere('id', (int) $id);

        if (!$product) {
            return response()->json([
                'message' => 'Product not found',
            ], 404);
        }

        $products = collect($products)->reject(function ($p) use ($id) {
            return $p['id'] === (int) $id;
        })->values()->toArray();

        return response()->json([
            'message' => 'Product deleted successfully',
            'data' => $product,
            'all_products' => $products,
        ]);
    }
}
