<?php

namespace App\Http\Controllers;

use App\Terms;
use Illuminate\Http\Request;

class TermsController extends Controller
{
	
	public function list() 
	{

		$terms = Terms::all();

		return view("terms.list")->with('terms', $terms);		

	}

	public function view($id) {

		$terms = Terms::find($id);

		return view("terms.view")->with('terms', $terms);

	}

	public function create(Request $request) {

		$method = $request->method();

		if($method === "GET") {
			return view("terms.create");
		}
		else {

			$term = new Terms;
			$term->fill($request->input());
			$term->save();

			return view("terms.create", ['messages' => 'Terms and Conditions policy added: ' . $request->company_name]);

		}

	}

	public function update(Request $request, $id) {

		$method = $request->method();

		if($method === "GET") {

			$terms = Terms::find($id);

			return view("terms.edit")->with('terms', $terms);

		}
		else {

			$terms = Terms::find($id);

			$terms->update($request->all());

			return view("terms.edit", ['messages' => 'Terms Updated: ' . $request->name])->with('terms', $terms);

		}

	}

	public function destroy($id) {

		$destroySite = Terms::find($id);

		$destroySite->delete();

		return redirect()->action('TermsController@list');

	}

}
