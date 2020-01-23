<?php

namespace App\Http\Controllers;

use App\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{

	public function list() 
	{

		$listSites = Site::all();

		return view("sites.list")->with('sites', $listSites);		

	}

	public function update(Request $request, $id) {

		$method = $request->method();

		if($method === "GET") {
			$editSite = Site::find($id);

			return view("sites.edit")->with('site', $editSite);
		}
		else {

			$editSite = Site::find($id);

			$editSite->update($request->all());

			return view("sites.edit", ['messages' => 'Site Updated: ' . $request->name])->with('site', $editSite);

		}

	}

	public function view($id) {

		$showSite = Site::find($id);

		return view("sites.view")->with('site', $showSite);

	}

	public function create(Request $request) {

		$method = $request->method();

		if($method === "GET") {
			return view("sites.create");
		}
		else {

			$request->validate([
				'name' => 'bail|required'
			]);

			$site = new Site;
			$site->fill($request->input());
			$site->save();

			return view("sites.create", ['messages' => 'Added site: ' . $request->name]);

		}

	}

	public function destroy($id) {

		$destroySite = Site::find($id);

		$destroySite->delete();

		return redirect()->action('SiteController@list');

	}

}