<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller {

    public function index() {
        $companies = Company::all();
        // return response()->json( $companies );
        return view( 'company.index', compact( 'companies' ) );
    }

    public function create() {
        return view( 'company.create' );
    }

    public function store( Request $request ) {
        $rules = [
            'name'    => 'required',
            'email'   => 'required',
            'address' => 'required',
        ];

        $this->validate( $request, $rules );
        Company::create( $request->all() );
        return redirect( '/companies' )->with( 'success', 'Company added successfully.' );
    }

    public function show( $id ) {
        $company = Company::findOrFail( $id );
        return view( 'company.show', compact( 'company' ) );
    }

    public function edit( $id ) {
        $company = Company::find( $id );
        return view( 'company.edit', compact( 'company' ) );
    }

    public function update( Request $request, $id ) {
        $rules = [
            'name'    => 'required',
            'email'   => 'required',
            'address' => 'required',
        ];

        $this->validate( $request, $rules );
        $record = Company::find( $id );
        $record->update( $request->all() );
        return redirect( '/companies' )->with( 'success', 'Company updated successfully.' );
    }

    public function destroy( $id ) {
        Company::where( 'id', $id )->delete();
        return redirect( '/companies' )->with( 'success', 'Company deleted successfully.' );
    }
}
