<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\KumpultugasRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class KumpultugasCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class KumpultugasCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Kumpultugas::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/kumpultugas');
        CRUD::setEntityNameStrings('kumpultugas', 'kumpultugas');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */

        CRUD::column('judultugas')->type('text')->label('Judul Tugas');
        CRUD::column('namamahasiswa')->type('text')->label('Nama Mahasiswa');
        CRUD::column('nimmahasiswa')->type('text')->label('NIM');
        CRUD::column('filetugas')->type('text')->label('File');
        CRUD::column('keterangantugas')->type('text')->label('Keterangan');
        CRUD::column('nilaitugas')->type('number')->label('Nilai');
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */

        CRUD::field('judultugas')->validationRules('required|min:5');
        CRUD::field('namamahasiswa')->validationRules('required|min:5');
        CRUD::field('nimmahasiswa')->validationRules('required|min:5');
        CRUD::field('filetugas')->validationRules('required|min:5');
        CRUD::field('keterangantugas')->validationRules('required|min:5');
        CRUD::field('nilaitugas')->validationRules('required|min:5');
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
