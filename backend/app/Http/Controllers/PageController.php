<?php

namespace App\Http\Controllers;

use App\Mail\ConfirEmail;
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

    public function imageUpload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg|max:9048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        $imagePath = env('APP_URL').'/uploads/' . $imageName;

        return response()->json(['path' => $imagePath]);
    }

    public function sendMail(Request $request)
    {

        try {
            $validatedData = $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'size' => 'nullable|numeric',
                'surface' => '',
                'city' => '',
                'image' => '',
                'message' => '',
            ]);

            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new TestEmail($validatedData));
            Mail::to($validatedData['email'])->send(new ConfirEmail($validatedData));
        }catch (\Illuminate\Validation\ValidationException $e) {
            // Validációs hiba esetén visszatérünk a hibaüzenetekkel
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            // Egyéb hibák kezelése
            return response()->json(['error' => 'E-mail küldése sikertelen.'], 500);
        }




        return response()->json(['success' => 'E-mail sikeresen elküldve!']);
    }

}
