<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MahasiswaRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MahasiswaCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MahasiswaCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Mahasiswa::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/mahasiswa');
        CRUD::setEntityNameStrings('mahasiswa', 'mahasiswas');
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

         CRUD::column('namaMahasiswa')->type('text')->label('Name');
         CRUD::column('nim')->type('text')->label('NIM');
         CRUD::column('jenisKelamin')->type('text')->label('Jenis Kelamin');
         CRUD::column('agama')->type('text')->label('Agama');
         CRUD::column('angkatan')->type('number')->label('Angkatan');
         CRUD::column('prodi')->type('text')->label('Prodi');
         CRUD::column('noHp')->type('text')->label('No HP');



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

        CRUD::field('namaMahasiswa')->validationRules('required|min:5');
        CRUD::field('nim')->validationRules('required');
        CRUD::field('agama')->validationRules('required');
        CRUD::field('angkatan')->validationRules('required|min:4');
        CRUD::field('jenisKelamin')->validationRules('required');
        CRUD::field('prodi')->validationRules('required');
        CRUD::field('noHp')->validationRules('required|min:10');
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
