<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MateriKuliahRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MateriKuliahCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MateriKuliahCrudController extends CrudController
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
        CRUD::setModel(\App\Models\MateriKuliah::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/materi-kuliah');
        CRUD::setEntityNameStrings('materi kuliah', 'materi kuliahs');
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

        CRUD::column('judulmateri')->type('text')->label('Judul Materi');
        CRUD::column('namamatakuliah')->type('text')->label('Mata Kuliah');
        CRUD::column('dosenpengampu')->type('text')->label('Dosen Pengampu');
        CRUD::column('pertemuanke')->type('text')->label('Pertemuan Ke');
        
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

        CRUD::field('judulmateri')->validationRules('required|min:5');
        CRUD::field('namamatakuliah')->validationRules('required|min:5');
        CRUD::field('dosenpengampu')->validationRules('required|min:5');
        CRUD::field('pertemuanke')->validationRules('required|min:1');
        CRUD::addField([   // Summernote
            'name'  => 'keteranganmateri',
            'label' => 'Keterangan Materi',
            'type'  => 'summernote',
            'options' => [],
        ],); 
        // CRUD::field('lampiran')->validationRules('required|min:5');

        CRUD::addField([   // Upload
            'name'      => 'lampiran',
            'label'     => 'Lampiran',
            'type'      => 'upload',
            'upload'    => true,
            'disk'      => 'uploads', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
            // optional:
            'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified
        ],);
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
