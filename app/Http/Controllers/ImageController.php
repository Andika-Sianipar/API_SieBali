<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function getImageUrl($id)
    {
        $konten = Konten::find($id);
        if ($konten) {
            return response()->json(['image_url' => asset("images/{$konten->gambar_konten}")]);
        }
        return response()->json(['error' => 'Konten not found'], 404);
    }
}