<?php

namespace App\Http\Controllers;

use App\Privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{


	public function list() 
	{

		$privacy = Privacy::all();

		return view("privacy.list")->with('privacy', $privacy);		

	}

	public function view($id) {

		$privacy = Privacy::find($id);

		return view("privacy.view")->with('privacy', $privacy);

	}

	public function create(Request $request) {

		$method = $request->method();

		if($method === "GET") {
			return view("privacy.create");
		}
		else {

			$privacy = new Privacy;
			$privacy->fill($request->input());
			$privacy->save();

			// return view("privacy.list", ['messages' => 'Added privacy statement: ' . $request->company_name]);

			return redirect()->action('PrivacyController@list', ['messages' => 'Policy created']);

		}

	}

	public function update(Request $request, $id) {

		$method = $request->method();

		if($method === "GET") {

			$privacy = Privacy::find($id);

			return view("privacy.edit")->with('privacy', $privacy);

		}
		else {

			$privacy = Privacy::find($id);

			$privacy->update($request->all());

			return view("privacy.edit", ['messages' => 'Privacy Updated: ' . $request->name])->with('privacy', $privacy);

		}

	}

	public function destroy($id) {

		$destroySite = Privacy::find($id);

		$destroySite->delete();

		return redirect()->action('PrivacyController@list', ['messages' => 'Policy removed']);

	}

}
