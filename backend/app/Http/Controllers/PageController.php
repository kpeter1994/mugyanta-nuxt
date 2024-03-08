<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;

class PageController extends Controller
{
    public function gallery()
    {
        $directory = public_path('gallery');
        $files = File::files($directory);

        $images = array_filter($files, function ($file) {
            return in_array($file->getExtension(), ['jpg', 'jpeg', 'png', 'webp' ]);
        });

        $imageNames = array_map(function ($file) {
            return $file->getFilename();
        }, $images);

        return response()->json($imageNames);
    }

    public function sendMail(Request $request)
    {

        try {
            $validatedData = $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'size' => 'nullable|numeric',
                'surface' => 'required',
                'city' => '',
                'message' => '',
            ]);

            $recipient = 'smitpeter777@gmail.com';
            Mail::to('smitpeter777@gmail.com')->send(new TestEmail($validatedData));
        }catch (\Illuminate\Validation\ValidationException $e) {
            // Validációs hiba esetén visszatérünk a hibaüzenetekkel
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            // Egyéb hibák kezelése
            return response()->json(['error' => 'E-mail küldése sikertelen.'], 500);
        }





        return 'E-mail elküldve.';
    }

}
