<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\MahasiswaResource;
use App\Models\Mahasiswa;
use Inertia\Inertia;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $mahasiswa = MahasiswaResource::collection(Mahasiswa::all());
        

        return Inertia::render('Welcome', compact('mahasiswa'));
    }
}
