<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plants;

class PlantsController extends Controller
{
    public function index(){
        $palm=Plants::where('category','=','Indoor palm plants')->get();
        $cactus=Plants::where('category','=','Cactus house plants')->get();
        $blup=Plants::where('category','=','Bulb house plants')->get();
        return view('plants-list',compact(['palm', 'cactus', 'blup']));
    }
    public function addPlant(){
        return view('add-plant');
    }
    public function savePlant(Request $request){
      
        $name = $request->name;
        $category = $request->category;
        $description = $request->description;
        $image = $request->image;

        $newPlant = new Plants();
        $newPlant->name = $name;
        $newPlant->category = $category;
        $newPlant->description = $description;
        $newPlant->image = $image;
        $newPlant->save();
        return redirect()->back()->with('success', 'Plant added successfully');     
    }

    public function editPlant($id){
        $data=Plants::where('id','=',$id)->first();
        return view('edit-plant',compact('data'));
    }

    public function updatePlant(Request $request,$id){
      
        $name = $request->name;
        $category = $request->category;
        $description = $request->description;
        $image = $request->image;

        $test=Plants::where('id','=', $id)->update([
            'name'=>$name,
            'category'=>$category,
            'description'=>$description,
            'image'=>$image
        ]);
        return redirect()->back()->with('success', 'Plant info updated successfully');     
    }

    public function deletePlant($id){
        Plants::where('id','=',$id)->delete();
        return redirect()->back()->with('success', 'Plant deleted successfully');
    }
}
