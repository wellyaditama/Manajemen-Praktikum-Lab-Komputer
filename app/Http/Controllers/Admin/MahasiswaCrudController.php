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
         CRUD::column('email')->type('text')->label('Email');

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
        CRUD::field('email')->type('email')->validationRules('required|min:5');
        CRUD::field('nim')->validationRules('required');
        
        CRUD::addField(['name'        => 'agama',
                'label'       => "Agama",
                'type'        => 'select_from_array',
                'options'     => ['Islam' => 'Islam', 'Kristen' => 'Kristen', 'Katolik'=> 'Katolik', 'Hindu'=> 'Hindu', 'Buddha'=> 'Buddha', 'Konghucu' => 'Konghucu'],
                'allows_null' => false,
                'default'     => 'Islam',]);
        CRUD::field('angkatan')->validationRules('required|min:4')->hint('Tahun angkatan, minimal 4 karakter');
        CRUD::addField(['name'        => 'jenisKelamin',
                'label'       => "Jenis Kelamin",
                'type'        => 'select_from_array',
                'options'     => ['Laki-laki'=>'Laki-laki', "Perempuan"=>"Perempuan"],
                'allows_null' => false,
                'default'     => 'Laki-laki',]);
                CRUD::addField(['name'        => 'prodi',
                'label'       => "Prodi",
                'type'        => 'select_from_array',
                'options'     => ['Informatika'=>'Informatika'],
                'allows_null' => false,
                'default'     => 'Informatika',]);
        CRUD::field('noHp')->validationRules('required|min:10')->hint('Dimulai dari 08, minimal 10 karakter');
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

        CRUD::field('namaMahasiswa')->validationRules('required|min:5');
        CRUD::field('email')->type('email')->validationRules('required|min:5');
        CRUD::field('nim')->validationRules('required');
        
        CRUD::addField(['name'        => 'agama',
                'label'       => "Agama",
                'type'        => 'select_from_array',
                'options'     => ['Islam' => 'Islam', 'Kristen' => 'Kristen', 'Katolik'=> 'Katolik', 'Hindu'=> 'Hindu', 'Buddha'=> 'Buddha', 'Konghucu' => 'Konghucu'],
                'allows_null' => false,
                'default'     => 'Islam',]);
        CRUD::field('angkatan')->validationRules('required|min:4')->hint('Tahun angkatan, minimal 4 karakter');
        CRUD::addField(['name'        => 'jenisKelamin',
                'label'       => "Jenis Kelamin",
                'type'        => 'select_from_array',
                'options'     => ['Laki-laki'=>'Laki-laki', "Perempuan"=>"Perempuan"],
                'allows_null' => false,
                'default'     => 'Laki-laki',]);
                CRUD::addField(['name'        => 'prodi',
                'label'       => "Prodi",
                'type'        => 'select_from_array',
                'options'     => ['Informatika'=>'Informatika'],
                'allows_null' => false,
                'default'     => 'Informatika',]);
        CRUD::field('noHp')->validationRules('required|min:10')->hint('Dimulai dari 08, minimal 10 karakter');
    }
}
