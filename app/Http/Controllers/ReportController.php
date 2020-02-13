<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\User;
use App\Http\Resources\Report as ReportResource;
use App\Http\Resources\ReportCollection;

class ReportController extends Controller
{	

	public function dashboard(){
		$reports = Report::all();
		$users = User::all();
		return view('reports.dashboard', compact('reports', 'users'));
	}
	public function calculator(){
		$reports = Report::all();
		return view('reports.calculator', compact('reports'));
	}
	public function allReport(){
		$reports = Report::all();
		return view('reports.allReport', compact('reports'));
	}
	public function singleReport($id){
		$report = Report::findOrFail($id);
		return view('reports.single', compact('report'));
	}

	// API Route function
    public function index(){
    	return new ReportCollection(Report::all());
    }

    public function show($id){
    	return new ReportResource(Report::findOrFail($id));
    }

    public function store(Request $request){
    	$report = Report::create($request->all());

    	return (new ReportResource($report))
    				->response()
    				->setStatusCode(201);
    }
}
