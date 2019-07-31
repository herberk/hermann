<?php

namespace App\Http\Controllers\User;

use App\Models\Auth\Profession;
use App\Http\Controllers\Controller;

class ProfessionController extends Controller
{
    public function index()
    {
        $professions = Profession::query()
            ->withCount('profiles')
            ->orderBy('title')
            ->get();

        return view('users.professions.index', [
            'professions' => $professions,
        ]);
    }

    public function destroy(Profession $profession)
    {
        abort_if($profession->profiles()->exists(), 400, 'Cannot delete a profession linked to a profile.');

        $profession->delete();

        return redirect('profesiones');
    }
}
