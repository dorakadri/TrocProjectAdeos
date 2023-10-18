<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reclamation;
use PDF;
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function generatePDF()
    {
        $reclamations = Reclamation::get();
  
        $data = [
      
            'reclamations' => $reclamations
        ]; 
            
        $pdf = PDF::loadView('admin.reclamations.myPDF', $data);
     
        return $pdf->download('laraveltuts.pdf');
    }
}