{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item">&nbsp;</li>
<li class="nav-item">Data Master</li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user-tie"></i> Account</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('mahasiswa') }}"><i class="nav-icon la la-graduation-cap"></i> Mahasiswa</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dosen') }}"><i class="nav-icon la la-chalkboard-teacher"></i> Dosen</a></li>
<li class="nav-item">&nbsp;</li>
<li class="nav-item">Data Universitas</li>
<!-- <li class="nav-item"><a class="nav-link" href="{{ backpack_url('fakultas') }}"><i class="nav-icon la la-university"></i> Fakultas</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('prodi') }}"><i class="nav-icon la la-university"></i> Prodi</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('gedung') }}"><i class="nav-icon la la-university"></i> Gedung</a></li> -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('ruang-kelas') }}"><i class="nav-icon la la-university"></i> Ruang kelas</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('kelas') }}"><i class="nav-icon la la-university"></i> Kelas</a></li>
<li class="nav-item">&nbsp;</li>
<li class="nav-item">Data Mata Kuliah</li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('mata-kuliah') }}"><i class="nav-icon la la-desktop"></i> Mata Kuliah</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('jadwal-mata-kuliah') }}"><i class="nav-icon la la-clock"></i> Jadwal Mata Kuliah</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('materi-kuliah') }}"><i class="nav-icon la la-book"></i> Materi Kuliah</a></li>

<li class="nav-item">&nbsp;</li>
<li class="nav-item">Data Praktikum</li>
<!-- <li class="nav-item"><a class="nav-link" href="{{ backpack_url('mata-kuliah') }}"><i class="nav-icon la la-calendar-alt"></i>Absensi Praktikum</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('mata-kuliah') }}"><i class="nav-icon la la-briefcase"></i>Materi Praktikum</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('mata-kuliah') }}"><i class="nav-icon la la-certificate"></i>Nilai Praktikum</a></li> -->


<li class="nav-item"><a class="nav-link" href="{{ backpack_url('absensi-praktikum') }}"><i class="nav-icon la la-user-clock"></i> Absensi Praktikum</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('nilai-praktikum') }}"><i class="nav-icon la la-graduation-cap"></i> Nilai Praktikum</a></li>

<li class="nav-item">&nbsp;</li>
<li class="nav-item">Data Tugas Praktikum</li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('datakelompok') }}"><i class="nav-icon la la-user-friends"></i> Data Kelompok</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('kelompok') }}"><i class="nav-icon la la-user-plus"></i> Kelompok</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('tugas') }}"><i class="nav-icon la la-book"></i> Tugas</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('kumpultugas') }}"><i class="nav-icon la la-laptop-code"></i> Kumpul Tugas</a></li>
<li class="nav-item">&nbsp;</li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('logout') }}"><i class="nav-icon la la-power-off"></i>Logout</a></li>
<li class="nav-item">&nbsp;</li>
<li class="nav-item">&nbsp;</li>