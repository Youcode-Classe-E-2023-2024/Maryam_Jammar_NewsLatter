<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\NewsLetter;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use PDF; // Importez la classe PDF correctement

class PDFController extends Controller
{
    public function generatePDF()
    {
        $totalUsers = User::all()->count();
        $totalTemplates = NewsLetter::all()->count();
        $totalSubscribers = Member::all()->count();

        $latestUsers = User::with('roles')->latest()->take(5)->get();
        $roles = Role::all();

        $latestTemplates = NewsLetter::latest()->take(6)->get();

        $pdf = PDF::loadView('admin.pdf', compact('totalUsers', 'totalTemplates', 'totalSubscribers', 'latestUsers', 'roles', 'latestTemplates'));

        return $pdf->download('report.pdf');
    }
}
