<!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="ai-icon" href="<?php echo base_url('mahasiswa'); ?>" aria-expanded="false">
							<i class="la la-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
                    <li class="nav-label first">Dinas Komunikasi Dan Informasi</li>
                    <li><a class="has-arrow ai-icon" href="avascript:void()" aria-expanded="false">
                            <i class="la la-building"></i>
                            <span class="nav-text">Registrasi Magang</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url('bidang'); ?>">Tentang Magang</a></li>
                            <?php if ($user['s_magang'] == '0') { ?>
                            <li><a href="<?php echo base_url('bidang/register'); ?>">Pilih Bidang</a></li>
                            <?php } ?>
                            <?php if ($user['s_magang'] == '1') { ?>
                            <li>
                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Harap upload terlebih dahulu surat rekomendasi Kampus">
                                    <a class="btn btn-block disabled" href="<?php echo base_url('bidang/register'); ?>">Pilih Bidang</a>
                                </span>
                            </li>
                            <?php } ?>
                            <?php if ($user['s_magang'] == '2') { ?>
                            <li>
                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Sesi magang sedang berlangsung">
                                    <a class="btn btn-block disabled" href="<?php echo base_url('bidang/register'); ?>">Pilih Bidang</a>
                                </span>
                            </li>
                            <?php } ?>
                            <?php if ($user['s_magang'] == '3') { ?>
                            <li>
                                <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Sesi magang kamu sudah selesai">
                                    <a class="btn btn-block disabled" href="<?php echo base_url('bidang/register'); ?>">Pilih Bidang</a>
                                </span>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="nav-label first">Presensi</li>
					<li><a class="ai-icon" href="<?php echo base_url('mahasiswa/jadwal'); ?>" aria-expanded="false">
							<i class="la la-calendar"></i>
							<span class="nav-text">Jadwal</span>
						</a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="la la-signal"></i>
                            <span class="nav-text">Kegiatanku</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url('mahasiswa/peserta'); ?>">Peserta</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Absensi</a>
                                 <ul aria-expanded="false">
                                    <li><a href="<?php echo base_url('mahasiswa/logbook'); ?>">Absensi</a></li>
                                    <li><a href="<?php echo base_url('mahasiswa/rekap'); ?>">Rekap Absensi</a></li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Upload Dokumen</a>
                                <ul aria-expanded="false">
                                    <li><a href="<?php echo base_url('mahasiswa/doc_rek_kampus'); ?>">Surat Rekomendasi Kampus</a></li>
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Laporan Akhir</a>
                                        <ul>
                                            <?php if ($user['s_magang'] == '0') { ?>
                                                <li>
                                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Kamu harus mendaftar bidang terlebih dahulu">
                                                        <a class="btn btn-block disabled" href="<?php echo base_url('mahasiswa/doc_program'); ?>">Program</a>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Kamu harus mendaftar bidang terlebih dahulu">
                                                        <a class="btn btn-block disabled" href="<?php echo base_url('mahasiswa/doc_program'); ?>">Program</a>
                                                    </span>
                                                </li>
                                            <?php } ?>
                                            <?php if ($user['s_magang'] == '1') { ?>
                                                <li>
                                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Kamu harus mendaftar bidang terlebih dahulu">
                                                        <a class="btn btn-block disabled" href="<?php echo base_url('mahasiswa/doc_program'); ?>">Program</a>
                                                    </span></li>
                                                <li>
                                                    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Kamu harus mendaftar bidang terlebih dahulu">
                                                        <a class="btn btn-block disabled" href="<?php echo base_url('mahasiswa/doc_laporan'); ?>">Laporan</a>
                                                    </span></li>
                                            <?php } ?>
                                            <?php if ($user['s_magang'] == '2') { ?>
                                                <li><a href="<?php echo base_url('mahasiswa/doc_program'); ?>">Program</a></li>
                                                <li><a href="<?php echo base_url('mahasiswa/doc_laporan'); ?>">Laporan</a></li>
                                            <?php } ?>
                                            <?php if ($user['s_magang'] == '3') { ?>
                                                <li><a href="<?php echo base_url('mahasiswa/doc_program'); ?>">Program</a></li>
                                                <li><a href="<?php echo base_url('mahasiswa/doc_laporan'); ?>">Laporan</a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url('mahasiswa/survey'); ?>">Penilaian Mingguan</a></li>
                            <?php if ($user['s_magang'] == '3') { ?>
                                <li><a href="<?php echo base_url('mahasiswa/magang_selesai'); ?>"><font color="green">Unduh Rapor & E-sertifikat</font></a></li>
                            <?php } ?>
                            <?php if ($user['s_magang'] == '2') { ?>
                                <li><a class="btn btn-block disabled" href="<?php echo base_url('mahasiswa/magang_selesai'); ?>">Unduh Rapor & E-sertifikat</a></li>
                            <?php } ?>
                            <?php if ($user['s_magang'] == '1') { ?>
                                <li><a class="btn btn-block disabled" href="<?php echo base_url('mahasiswa/magang_selesai'); ?>">Unduh Rapor & E-sertifikat</a></li>
                            <?php } ?>
                            <?php if ($user['s_magang'] == '0') { ?>
                                <li><a class="btn btn-block disabled" href="<?php echo base_url('mahasiswa/magang_selesai'); ?>">Unduh Rapor & E-sertifikat</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="nav-label first">Pusat Bantuan</li>
                    <li><a class="has-arrow ai-icon" href="avascript:void()" aria-expanded="false">
                            <i class="la la-bookmark"></i>
                            <span class="nav-text">Tiket</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url('mahasiswa/list_tiket'); ?>">List Tiket</a></li>
                            <li><a href="<?php echo base_url('mahasiswa/add_tiket'); ?>">Tambah Tiket</a></li>
                        </ul>
                    </li>
					<!-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-user"></i>
							<span class="nav-text">Professors</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-professors.html">All Professor</a></li>
                            <li><a href="add-professor.html">Add Professor</a></li>
                            <li><a href="edit-professor.html">Edit Professor</a></li>
                            <li><a href="professor-profile.html">Professor Profile</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Students</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-students.html">All Students</a></li>
                            <li><a href="add-student.html">Add Students</a></li>
                            <li><a href="edit-student.html">Edit Students</a></li>
                            <li><a href="about-student.html">About Students</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-graduation-cap"></i>
							<span class="nav-text">Courses</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-courses.html">All Courses</a></li>
                            <li><a href="add-courses.html">Add Courses</a></li>
                            <li><a href="edit-courses.html">Edit Courses</a></li>
                            <li><a href="about-courses.html">About Courses</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-book"></i>
							<span class="nav-text">Library</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-library.html">All Library</a></li>
                            <li><a href="add-library.html">Add Library</a></li>
                            <li><a href="edit-library.html">Edit Library</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-building"></i>
							<span class="nav-text">Departments</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-departments.html">All Departments</a></li>
                            <li><a href="add-departments.html">Add Departments</a></li>
                            <li><a href="edit-departments.html">Edit Departments</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Staff</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-staff.html">All Staff</a></li>
                            <li><a href="add-staff.html">Add Staff</a></li>
                            <li><a href="edit-staff.html">Edit Staff</a></li>
                            <li><a href="staff-profile.html">Staff Profile</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-gift"></i>
							<span class="nav-text">Holiday</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="all-holiday.html">All Holiday</a></li>
                            <li><a href="add-holiday.html">Add Holiday</a></li>
                            <li><a href="edit-holiday.html">Edit Holiday</a></li>
                            <li><a href="holiday-calendar.html">Holiday Calendar</a></li>
                        </ul>
                    </li>
					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-dollar"></i>
							<span class="nav-text">Fees</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="fees-collection.html">Fees Collection</a></li>
                            <li><a href="add-fees.html">Add Fees</a></li>
                            <li><a href="fees-receipt.html">Fees Receipt</a></li>
                        </ul>
                    </li>					
                    <li class="nav-label">Apps</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-users"></i>
							<span class="nav-text">Apps</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="app-profile.html">Profile</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="email-compose.html">Compose</a></li>
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="app-calender.html">Calendar</a></li>
							<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="ecom-product-grid.html">Product Grid</a></li>
									<li><a href="ecom-product-list.html">Product List</a></li>
									<li><a href="ecom-product-detail.html">Product Details</a></li>
									<li><a href="ecom-product-order.html">Order</a></li>
									<li><a href="ecom-checkout.html">Checkout</a></li>
									<li><a href="ecom-invoice.html">Invoice</a></li>
									<li><a href="ecom-customers.html">Customers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-label">Components</li>
                    <li class="mega-menu mega-menu-xl"><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="la la-globe"></i>
							<span class="nav-text">Bootstrap</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="ui-accordion.html">Accordion</a></li>
                            <li><a href="ui-alert.html">Alert</a></li>
                            <li><a href="ui-badge.html">Badge</a></li>
                            <li><a href="ui-button.html">Button</a></li>
                            <li><a href="ui-modal.html">Modal</a></li>
                            <li><a href="ui-button-group.html">Button Group</a></li>
                            <li><a href="ui-list-group.html">List Group</a></li>
                            <li><a href="ui-media-object.html">Media Object</a></li>
                            <li><a href="ui-card.html">Cards</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                            <li><a href="ui-dropdown.html">Dropdown</a></li>
                            <li><a href="ui-popover.html">Popover</a></li>
                            <li><a href="ui-progressbar.html">Progressbar</a></li>
                            <li><a href="ui-tab.html">Tab</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-pagination.html">Pagination</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-plus-square-o"></i>
							<span class="nav-text">Plugins</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="uc-select2.html">Select 2</a></li>
                            <li><a href="uc-nestable.html">Nestedable</a></li>
                            <li><a href="uc-noui-slider.html">Noui Slider</a></li>
                            <li><a href="uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="uc-toastr.html">Toastr</a></li>
                            <li><a href="map-jqvmap.html">Jqv Map</a></li>
                        </ul>
                    </li>
                    <li><a href="widget-basic.html" aria-expanded="false">
							<i class="la la-desktop"></i>
							<span class="nav-text">Widget</span>
						</a></li>
                    <li class="nav-label">Forms</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-file-text"></i>
							<span class="nav-text">Forms</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="form-element.html">Form Elements</a></li>
                            <li><a href="form-wizard.html">Wizard</a></li>
                            <li><a href="form-editor-summernote.html">Summernote</a></li>
                            <li><a href="form-pickers.html">Pickers</a></li>
                            <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Table</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-table"></i>
							<span class="nav-text">Table</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Extra</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="la la-th-list"></i>
							<span class="nav-text">Pages</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="page-register.html">Register</a></li>
                            <li><a href="page-login.html">Login</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="page-error-400.html">Error 400</a></li>
                                    <li><a href="page-error-403.html">Error 403</a></li>
                                    <li><a href="page-error-404.html">Error 404</a></li>
                                    <li><a href="page-error-500.html">Error 500</a></li>
                                    <li><a href="page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                        </ul>
                    </li> -->
				</ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->