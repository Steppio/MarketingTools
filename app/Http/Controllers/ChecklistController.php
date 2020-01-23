<?php

namespace App\Http\Controllers;

use App\Checklist;
use App\Site;
use Illuminate\Http\Request;

class ChecklistController extends Controller
{

	public function __construct(Site $site) {
		$this->site = $site;
	}

	public function list() 
	{

		$checklists = Checklist::with('Site')->get();

		return view("checklist.list")->with('checklists', $checklists);		

	}

	public function view($id) {

		$checklist = Checklist::find($id);

		return view("checklist.view")->with('checklist', $checklist);

	}

	public function create(Request $request) {

		$sites = Site::all(['id', 'name']);
		$method = $request->method();

		if($method === "GET") {
			return view("checklist.create")->with('sites', $sites);
		}
		else {

			$checklist = new Checklist;
			$checklist->fill($request->input());
			$checklist->save();

			// return view("checklist.list", ['messages' => 'Checklist site: ' . $request->name]);
			return redirect()->action('ChecklistController@list', ['messages' => 'Checklist site: ' . $request->name]);

		}	

	}

	public function update(Request $request, $id) {

		$method = $request->method();

		if($method === "GET") {
			$editChecklist = Checklist::find($id);

			return view("checklist.edit")->with('checklist', $editChecklist);
		}
		else {

			$editChecklist = Checklist::find($id);

			$editChecklist->update($request->all());

			return view("checklist.edit", ['messages' => 'Checklist Updated: ' . $request->name])->with('checklist', $editChecklist);

		}

	}

	public function destroy($id) {

		$destroyChecklist = Checklist::find($id);

		$destroyChecklist->delete();

		return redirect()->action('ChecklistController@list');

	}

}
