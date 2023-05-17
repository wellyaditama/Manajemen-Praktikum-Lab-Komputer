<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TugasRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TugasCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TugasCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Tugas::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/tugas');
        CRUD::setEntityNameStrings('tugas', 'tugas');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        

        CRUD::column('judultugas')->type('text')->label('Judul Tugas');
        CRUD::column('nama_matkul')->type('text')->label('Matkul');
        CRUD::column('deskripsi')->type('text')->label('Deskripsi');
        CRUD::column('dosen_pengampu')->type('text')->label('Dosen Pengampu');
        CRUD::column('lampiran')->type('text')->label('Keterangan');

        

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::field('judultugas')->validationRules('required|min:5');
        CRUD::field('nama_matkul')->validationRules('required|min:5');
        CRUD::field('deskripsi')->validationRules('required|min:5');
        CRUD::field('dosen_pengampu')->validationRules('required|min:5');
        CRUD::field('lampiran')->validationRules('required|min:5');

        





        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
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
