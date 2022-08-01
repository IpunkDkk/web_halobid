{{-- @php
    dd (auth()->user()->role->role)
@endphp --}}

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="{{ asset('dist/img/halobid.png') }}" alt="halobid" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">HaloBid</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/admin.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/admin" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

    @if (auth()->user()->role->role == 'admin')
    <li class="nav-item {{ 'admin' == request()->path() ? 'menu-open' : '' }}">
      <a href="/admin" class="nav-link {{ 'admin' == request()->path() ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
      </a>
    </li>
    
      <li class="nav-header">Data Master</li>
        <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-wallet"></i>
                <p>
                  Kelola
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
            <ul class="nav nav-treeview">
                <li class="nav-item {{ 'antrian' == request()->path() ? 'menu-open' : '' }}">
                  <a href="{{ route('antrian.index') }}" class="nav-link {{ 'admin/antrian' == request()->path() ? 'active' : '' }}">
                    <i class="nav-icon fas fa-power-off"></i>
                    <p>Antrian</p>
                  </a>
                </li>
                <li class="nav-item {{ 'posyandu' == request()->path() ? 'menu-open' : '' }}">
                  <a href="{{ route('posyandu.index') }}" class="nav-link {{ 'admin/posyandu' == request()->path() ? 'active' : '' }}">
                    <i class="nav-icon fas fa-solid fa-hospital"></i>
                    <p>Posyandu</p>
                  </a>
                </li>
                <li class="nav-item {{ 'admin/bidan' == request()->path() ? 'menu-open' : '' }}">
                  <a href="{{ route('bidan.index') }}" class="nav-link {{ 'admin/bidan' == request()->path() ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user-nurse"></i>
                    <p>Data Bidan</p>
                  </a>
                </li>
                
                <li class="nav-item {{ 'bayi' == request()->path() ? 'menu-open' : '' }}">
                  <a href="{{ route('bumil.index') }}" class="nav-link {{ 'admin/bumil' == request()->path() ? 'active' : '' }}">
                    <i class="nav-icon fas fa-regular fa-wheelchair"></i>
                    <p>Data Ibu Hamil</p>
                  </a>
                </li>
                <li class="nav-item {{ 'bayi' == request()->path() ? 'menu-open' : '' }}">
                  <a href="{{ route('bayi.index') }}" class="nav-link {{ 'admin/bayi' == request()->path() ? 'active' : '' }}">
                    <i class="nav-icon fas fa-solid fa-baby"></i>
                    <p>Data Bayi</p>
                  </a>
                </li>
                <li class="nav-item {{ 'kb' == request()->path() ? 'menu-open' : '' }}">
                  <a href="{{ route('kb.index') }}" class="nav-link {{ 'admin/kb' == request()->path() ? 'active' : '' }}">
                    <i class="nav-icon fas fa-solid fa-syringe"></i>
                    <p>Data KB</p>
                  </a>
                </li>
                <li class="nav-item {{ 'user' == request()->path() ? 'menu-open' : '' }}">
                  <a href="{{ route('user.index') }}" class="nav-link {{ 'admin/user' == request()->path() ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Data User</p>
                  </a>
                </li>
            </ul>
        </li>
      <li class="nav-header">Data Laporan</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-solid fa-book"></i>
            <p>
              Laporan
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item {{ 'laporanbayi' == request()->path() ? 'menu-open' : '' }}">
              <a href="{{ route('laporanbayi.index') }}" class="nav-link {{ 'admin/laporan' == request()->path() ? 'active' : '' }}">
                <i class="nav-icon fas fa-baby"></i>
                <p>Bayi</p>
              </a>
            </li>
          </ul>
        </li>
          
          <li class="nav-header">Data Layanan</li>
          {{-- <li class="nav-item {{ 'konsultasi' == request()->path() ? 'menu-open' : '' }}">
            <a href="{{ route('konsultasi.index') }}" class="nav-link {{ 'admin/konsultasi' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-solid fa-comment-dots"></i>
              <p>Konsultasi</p>
            </a>
          </li> --}}
          <li class="nav-item {{ 'logout' == request()->path() ? 'menu-open' : '' }}">
          <a href="/logout" class="nav-link {{ 'logout' == request()->path() ? 'active' : '' }}">
              <i class="nav-icon fas fa-power-off"></i>
              <p>Logout</p>
            </a>
          </li>
        @endif

          @if (auth()->user()->role->role == 'bidan')
            <li class="nav-header">Data Master</li>
              <li class="nav-item {{ 'admin/bidan' == request()->path() ? 'menu-open' : '' }}">
                <a href="{{ route('bidan.index') }}" class="nav-link {{ 'admin/bidan' == request()->path() ? 'active' : '' }}">
                  <i class="nav-icon fas fa-user-nurse"></i>
                  <p>Data Bidan</p>
                </a>
              </li>
              <li class="nav-item {{ 'bayi' == request()->path() ? 'menu-open' : '' }}">
                <a href="{{ route('bumil.index') }}" class="nav-link {{ 'admin/bumil' == request()->path() ? 'active' : '' }}">
                  <i class="nav-icon fas fa-regular fa-wheelchair"></i>
                  <p>Data Ibu Hamil</p>
                </a>
              </li>
              <li class="nav-item {{ 'bayi' == request()->path() ? 'menu-open' : '' }}">
                <a href="{{ route('bayi.index') }}" class="nav-link {{ 'admin/bayi' == request()->path() ? 'active' : '' }}">
                  <i class="nav-icon fas fa-solid fa-baby"></i>
                  <p>Data Bayi</p>
                </a>
              </li>
              <li class="nav-item {{ 'kb' == request()->path() ? 'menu-open' : '' }}">
                <a href="{{ route('kb.index') }}" class="nav-link {{ 'admin/kb' == request()->path() ? 'active' : '' }}">
                  <i class="nav-icon fas fa-solid fa-syringe"></i>
                  <p>Data KB</p>
                </a>
              </li>
            <li class="nav-header">Data Layanan</li>
              {{-- <li class="nav-item {{ 'konsultasi' == request()->path() ? 'menu-open' : '' }}">
                <a href="{{ route('konsultasi.index') }}" class="nav-link {{ 'admin/konsultasi' == request()->path() ? 'active' : '' }}">
                  <i class="nav-icon fas fa-solid fa-comment-dots"></i>
                  <p>Konsultasi</p>
                </a>
              </li> --}}
              
              <li class="nav-item {{ 'logout' == request()->path() ? 'menu-open' : '' }}">
                <a href="/logout" class="nav-link {{ 'logout' == request()->path() ? 'active' : '' }}">
                  <i class="nav-icon fas fa-power-off"></i>
                  <p>Logout</p>
                </a>
              </li>
            @endif

            @if (auth()->user()->role->role == 'kader')
            <li class="nav-header">Data Master</li>
              <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-wallet"></i>
                      <p>
                        Kelola
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item {{ 'admin/bidan' == request()->path() ? 'menu-open' : '' }}">
                        <a href="{{ route('bidan.index') }}" class="nav-link {{ 'admin/bidan' == request()->path() ? 'active' : '' }}">
                          <i class="nav-icon fas fa-user-nurse"></i>
                          <p>Data Bidan</p>
                        </a>
                      </li>
                      
                      <li class="nav-item {{ 'bayi' == request()->path() ? 'menu-open' : '' }}">
                        <a href="{{ route('bumil.index') }}" class="nav-link {{ 'admin/bumil' == request()->path() ? 'active' : '' }}">
                          <i class="nav-icon fas fa-regular fa-wheelchair"></i>
                          <p>Data Ibu Hamil</p>
                        </a>
                      </li>
                      <li class="nav-item {{ 'bayi' == request()->path() ? 'menu-open' : '' }}">
                        <a href="{{ route('bayi.index') }}" class="nav-link {{ 'admin/bayi' == request()->path() ? 'active' : '' }}">
                          <i class="nav-icon fas fa-solid fa-baby"></i>
                          <p>Data Bayi</p>
                        </a>
                      </li>
                      <li class="nav-item {{ 'kb' == request()->path() ? 'menu-open' : '' }}">
                        <a href="{{ route('kb.index') }}" class="nav-link {{ 'admin/kb' == request()->path() ? 'active' : '' }}">
                          <i class="nav-icon fas fa-solid fa-syringe"></i>
                          <p>Data KB</p>
                        </a>
                      </li>
                      <li class="nav-item {{ 'user' == request()->path() ? 'menu-open' : '' }}">
                        <a href="{{ route('user.index') }}" class="nav-link {{ 'admin/user' == request()->path() ? 'active' : '' }}">
                          <i class="nav-icon fas fa-user"></i>
                          <p>Data User</p>
                        </a>
                      </li>
                  </ul>
              </li>
            <li class="nav-header">Data Laporan</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-solid fa-book"></i>
                  <p>
                    Laporan
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item {{ 'laporanbayi' == request()->path() ? 'menu-open' : '' }}">
                    <a href="{{ route('laporanbayi.index') }}" class="nav-link {{ 'admin/laporan' == request()->path() ? 'active' : '' }}">
                      <i class="nav-icon fas fa-baby"></i>
                      <p>Bayi</p>
                    </a>
                  </li>
                </ul>
              </li>
                
                {{-- <li class="nav-header">Data Layanan</li>
                <li class="nav-item {{ 'konsultasi' == request()->path() ? 'menu-open' : '' }}">
                  <a href="{{ route('konsultasi.index') }}" class="nav-link {{ 'admin/konsultasi' == request()->path() ? 'active' : '' }}">
                    <i class="nav-icon fas fa-solid fa-comment-dots"></i>
                    <p>Konsultasi</p>
                  </a>
                </li> --}}
                <li class="nav-item {{ 'logout' == request()->path() ? 'menu-open' : '' }}">
                <a href="/logout" class="nav-link {{ 'logout' == request()->path() ? 'active' : '' }}">
                    <i class="nav-icon fas fa-power-off"></i>
                    <p>Logout</p>
                  </a>
                </li>
              @endif

              @if (auth()->user()->role->role == 'user')
              <li class="nav-header">Data Master</li>
                <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-wallet"></i>
                        <p>
                          Kelola
                          <i class="fas fa-angle-left right"></i>
                        </p>
                      </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item {{ 'antrian' == request()->path() ? 'menu-open' : '' }}">
                          <a href="{{ route('antrian.index') }}" class="nav-link {{ 'admin/antrian' == request()->path() ? 'active' : '' }}">
                            <i class="nav-icon fas fa-power-off"></i>
                            <p>Antrian</p>
                          </a>
                        </li>
                        <li class="nav-item {{ 'bayi' == request()->path() ? 'menu-open' : '' }}">
                          <a href="{{ route('bumil.index') }}" class="nav-link {{ 'admin/bumil' == request()->path() ? 'active' : '' }}">
                            <i class="nav-icon fas fa-regular fa-wheelchair"></i>
                            <p>Data Ibu Hamil</p>
                          </a>
                        </li>
                        <li class="nav-item {{ 'bayi' == request()->path() ? 'menu-open' : '' }}">
                          <a href="{{ route('bayi.index') }}" class="nav-link {{ 'admin/bayi' == request()->path() ? 'active' : '' }}">
                            <i class="nav-icon fas fa-solid fa-baby"></i>
                            <p>Data Bayi</p>
                          </a>
                        </li>
                        <li class="nav-item {{ 'kb' == request()->path() ? 'menu-open' : '' }}">
                          <a href="{{ route('kb.index') }}" class="nav-link {{ 'admin/kb' == request()->path() ? 'active' : '' }}">
                            <i class="nav-icon fas fa-solid fa-syringe"></i>
                            <p>Data KB</p>
                          </a>
                        </li>
                        
                    </ul>
                </li>
                  
                  {{-- <li class="nav-header">Data Layanan</li>
                  <li class="nav-item {{ 'konsultasi' == request()->path() ? 'menu-open' : '' }}">
                    <a href="{{ route('konsultasi.index') }}" class="nav-link {{ 'admin/konsultasi' == request()->path() ? 'active' : '' }}">
                      <i class="nav-icon fas fa-solid fa-comment-dots"></i>
                      <p>Konsultasi</p>
                    </a>
                  </li> --}}
                  <li class="nav-item {{ 'logout' == request()->path() ? 'menu-open' : '' }}">
                  <a href="/logout" class="nav-link {{ 'logout' == request()->path() ? 'active' : '' }}">
                      <i class="nav-icon fas fa-power-off"></i>
                      <p>Logout</p>
                    </a>
                  </li>
                @endif

            </ul>
        </nav>
      </div>
    </aside>

    {{-- <li class="nav-item {{ 'mitra' == request()->path() ? 'menu-open' : '' }}">
      <a href="{{ route('mitra.index') }}" class="nav-link {{ 'admin/mitra' == request()->path() ? 'active' : '' }}">
        <i class="nav-icon fas fa-book"></i>
        <p>Mitra</p>
      </a>
    </li> --}}
      {{-- <li class="nav-item {{ 'persalinan' == request()->path() ? 'menu-open' : '' }}">
        <a href="{{ route('persalinan.index') }}" class="nav-link {{ 'admin/persalinan' == request()->path() ? 'active' : '' }}">
          <i class="nav-icon fas fa-solid fa-child"></i>
          <p>Persalinan</p>
        </a>
      </li> --}}
      {{-- <li class="nav-item {{ 'pasien' == request()->path() ? 'menu-open' : '' }}">
                <a href="{{ route('pasien.index') }}" class="nav-link {{ 'admin/pasien' == request()->path() ? 'active' : '' }}">
                  <i class="nav-icon fas fa-solid fa-bed"></i>
                  <p>Pasien</p>
                </a>
              </li> --}}
      {{-- <li class="nav-header">Data Layanan</li> --}}

        {{-- <li class="nav-item {{ 'obat' == request()->path() ? 'menu-open' : '' }}">
                <a href="{{ route('obat.index') }}" class="nav-link {{ 'admin/obat' == request()->path() ? 'active' : '' }}">
                  <i class="nav-icon fas fa-solid fa-pills"></i>
                  <p>Data Obat</p>
                </a>
              </li>
              <li class="nav-item {{ 'petugas' == request()->path() ? 'menu-open' : '' }}">
                <a href="{{ route('petugas.index') }}" class="nav-link {{ 'admin/petugas' == request()->path() ? 'active' : '' }}">
                  <i class="nav-icon fas fa-solid fa-user-plus"></i>
                  <p>Data Petugas</p>
                </a>
              </li> --}}

    {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-solid fa-briefcase-medical"></i>
              <p>
                Layanan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          <ul class="nav nav-treeview">
              <li class="nav-item {{ 'persalinan' == request()->path() ? 'menu-open' : '' }}">
                <a href="{{ route('persalinan.index') }}" class="nav-link {{ 'admin/persalinan' == request()->path() ? 'active' : '' }}">
                  <i class="nav-icon fas fa-solid fa-child"></i>
                  <p>Persalinan</p>
                </a>
              </li>
              <li class="nav-item {{ 'imunisasi' == request()->path() ? 'menu-open' : '' }}">
                <a href="{{ route('imunisasi.index') }}" class="nav-link {{ 'admin/imunisasi' == request()->path() ? 'active' : '' }}">
                  <i class="nav-icon fas fa-solid fa-syringe"></i>
                  <p>Imunisasi</p>
                </a>
              </li>
              <li class="nav-item {{ 'persalinan' == request()->path() ? 'menu-open' : '' }}">
                <a href="{{ route('persalinan.index') }}" class="nav-link {{ 'admin/pesalinan' == request()->path() ? 'active' : '' }}">
                  <i class="nav-icon fas fa-solid fa-child"></i>
                  <p>Periksa Anak</p>
                </a>
              </li>
          </ul>
    </li> --}}


      {{-- <li class="nav-header">Data Laporan</li> --}}
    
              {{-- <li class="nav-item {{ 'persalinna' == request()->path() ? 'menu-open' : '' }}">
                <a href="{{ route('persalinan.index') }}" class="nav-link {{ 'admin/layanan' == request()->path() ? 'active' : '' }}">
                  <i class="nav-icon fas fa-solid fa-briefcase-medical"></i>
                  <p>Persalinan</p>
                </a>
              </li> --}}
              {{-- <li class="nav-item {{ 'medis' == request()->path() ? 'menu-open' : '' }}">
                <a href="{{ route('medis.index') }}" class="nav-link {{ 'admin/medis' == request()->path() ? 'active' : '' }}">
                  <i class="nav-icon fas fa-solid fa-paper-plane"></i>
                  <p>Transaksi Medis</p>
                </a>
              </li> --}}
              
              {{-- 
              <li class="nav-item {{ 'blog' == request()->path() ? 'menu-open' : '' }}">
                <a href="{{ route('blog.index') }}" class="nav-link {{ 'admin/blog' == request()->path() ? 'active' : '' }}">
                  <i class="nav-icon fas fa-globe"></i>
                  <p>Blog</p>
                </a>
              </li> --}}
              
              
           
          