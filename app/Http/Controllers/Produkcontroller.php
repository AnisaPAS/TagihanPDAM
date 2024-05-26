<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Produkcontroller extends Controller
{
    public function form_tagihan(){
        return view("tagihan");
    }
    public function form_actionTagihan(Request $request){
        $usage = $request->usage;
        if($usage<=25){
            $cost = $usage * 150;
            echo "Total Penggunaan $usage dengan Biaya $cost";
        }
        elseif($usage<=50){
            $cost = ($usage-25) * 170 + 3750;
            echo "Total Penggunaan $usage dengan Biaya $cost";
        }
        elseif($usage<=75){
            $cost = ($usage-50) * 210 + 3750 + 4350;
            echo "Total Penggunaan $usage dengan Biaya $cost";
        }
        else{
            $cost = ($usage-75) * 250 + 3750 + 4350 + 5250;
            echo "Total Penggunaan $usage dengan Biaya $cost";
        }
    }
}