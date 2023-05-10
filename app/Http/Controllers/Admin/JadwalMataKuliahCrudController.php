<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\JadwalMataKuliahRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class JadwalMataKuliahCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class JadwalMataKuliahCrudController extends CrudController
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
        CRUD::setModel(\App\Models\JadwalMataKuliah::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/jadwal-mata-kuliah');
        CRUD::setEntityNameStrings('jadwal mata kuliah', 'jadwal mata kuliahs');
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

        CRUD::column('namaMataKuliah')->type('text')->label('Mata Kuliah');
        CRUD::column('ruangKelas')->type('text')->label('Ruang Kelas');
        CRUD::column('dosenPengampu')->type('text')->label('Dosen Pengampu');
        CRUD::column('waktuMulai')->type('time')->label('Mulai');
        CRUD::column('waktuSelesai')->type('time')->label('Selesai');
        CRUD::column('hari')->type('text')->label('Hari');
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

        CRUD::field('namaMataKuliah')->type('text')->validationRules('required');
        CRUD::field('ruangKelas')->type('text')->validationRules('required');
        CRUD::field('dosenPengampu')->type('text')->validationRules('required');
        CRUD::field('waktuMulai')->type('time')->validationRules('required');
        CRUD::field('waktuSelesai')->type('time')->validationRules('required');
        // CRUD::field('hari')->type('text')->validationRules('required');
        $this->crud->addField([
            'name'          => 'hari',
            'label'         => 'Hari',
            'type'          => 'select_from_array',
            'options'       => [
                'Senin'     => 'Senin',
                'Selasa'    => 'Selasa',
                'Rabu'      => 'Rabu',
                'Kamis'     => 'Kamis',
                'Jumat'     => 'Jumat',
                'Sabtu'     => 'Sabtu',
            ],
            'allows_null'     => false,
            'allows_multiple' => false,
            
        ]);
        
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
