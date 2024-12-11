<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pencak Silat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
</head>

<body>

    <!-- Memanggil header -->
    @include('components.header')

    <body>
        <!-- Sidebar Official -->
        <div class="sidenav" id="sidebar">
            <h1 class="nav-judul">Pencak Silat - Official</h1>

            <!-- Dashboard -->
            <a href="#" class="nav-item mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                    class="bi bi-speedometer2 me-2" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4z" />
                    <path
                        d="M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707z" />
                    <path
                        d="M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zM9.5 10a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H10a.5.5 0 0 1-.5-.5z" />
                    <path fill-rule="evenodd"
                        d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                </svg>
                <h5 class="nav-text">Dashboard</h5>
            </a>

            <!-- Manajemen Kontingen -->
            <a href="/kontingen" class="nav-item mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-gear" viewBox="0 0 16 16">
                    <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                    <path
                        d="M2 10a.5.5 0 0 1 .5-.5h4.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zM10.5 10a.5.5 0 0 1 .5-.5h3.5a.5.5 0 0 1 0 1h-3.5a.5.5 0 0 1-.5-.5z" />
                </svg>
                <h5 class="nav-text">Manajemen Kontingen</h5>
            </a>

            <!-- Contact -->
            <a href="#" class="nav-item mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-telephone-plus" viewBox="0 0 16 16">
                    <path
                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                    <path fill-rule="evenodd"
                        d="M12.5 1a.5.5 0 0 1 .5.5V3h1.5a.5.5 0 0 1 0 1H13v1.5a.5.5 0 0 1-1 0V4h-1.5a.5.5 0 0 1 0-1H12V1.5a.5.5 0 0 1 .5-.5" />
                </svg>
                <h5 class="nav-text">Contact</h5>
            </a>

            <!-- Pembayaran -->
            <a href="/transaksi" class="nav-item mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cash-coin" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0" />
                    <path
                        d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.652v-1.221zm-7.77-8.065a.5.5 0 0 0-.77.445l.565 1.698a.5.5 0 0 0 .771.254l.566-1.698a.5.5 0 0 0-.77-.445zM7 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                    <path
                        d="M11 1.5a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5h10z" />
                </svg>
                <h5 class="nav-text">Pembayaran</h5>
            </a>

            <!-- Logout -->
            <a href="/logout" class="nav-item mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M11.854 5.854a.5.5 0 0 0-.708-.708L9.5 7.793V1.5a.5.5 0 0 0-1 0v6.293l-1.646-1.647a.5.5 0 0 0-.708.708l2.5 2.5a.5.5 0 0 0 .708 0l2.5-2.5zM12 13a.5.5 0 0 1-.5-.5V11h-1a1 1 0 0 1 0-2h1v-1.5a.5.5 0 0 1 1 0V9h1a1 1 0 0 1 0 2h-1v1.5a.5.5 0 0 1-.5.5z" />
                </svg>
                <h5 class="nav-text">Logout</h5>
            </a>
        </div>

        <!-- Main Content -->
        <div class="content">
            <!-- Konten utama dari halaman official akan dimasukkan di sini -->
        </div>

        <!-- Memanggil footer -->
        @include('components.footer')
    </body>


    <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid p-4">
            <h2 class="mb-4">Dashboard Official</h2>

            <!-- DataTable for Kontingen -->
            <div class="card">
                <div class="card-header">
                    <h4>Data Kontingen</h4>
                </div>
                <div class="card-body">
                    <table id="kontingenTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Official</th>
                                <th>Kontingen</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data akan diisi secara dinamis oleh DataTables -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-4">
        <p>© 2024 Pencak Silat Dashboard. All rights reserved.</p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#kontingenTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/api/kontingen', // URL endpoint untuk mengambil data kontingen
                columns: [{
                        data: 'no'
                    },
                    {
                        data: 'official_name'
                    },
                    {
                        data: 'kontingen_name'
                    },
                    {
                        data: 'aksi'
                    }
                ]
            });
        });
    </script>
    <script>
        // Data untuk Official
        const officialData = [
            ["Ahmad Syahputra", "Jl. Merdeka No.10", "Jakarta", "1990-05-12",
                "<img src='foto_official1.jpg' alt='Foto 1' style='width:50px'>"
            ],
            ["Dewi Kartika", "Jl. Surya No.15", "Surabaya", "1985-07-20",
                "<img src='foto_official2.jpg' alt='Foto 2' style='width:50px'>"
            ]
        ];

        // Data untuk Atlet
        const atletData = [
            ["Rani Wijaya", "SMAN 1 Bandung", "Bandung", "2003-02-14", "55", "160",
                "<img src='foto_pesilat1.jpg' alt='Foto 1' style='width:50px'>"
            ],
            ["Budi Santoso", "SMA Bina Bangsa", "Yogyakarta", "2005-06-18", "70", "175",
                "<img src='foto_pesilat2.jpg' alt='Foto 2' style='width:50px'>"
            ]
        ];

        // Inisialisasi DataTables
        $(document).ready(function() {
            // Official Table
            $('#officialTable').DataTable({
                data: officialData,
                columns: [{
                        title: "Nama Lengkap"
                    },
                    {
                        title: "Alamat"
                    },
                    {
                        title: "Tempat Lahir"
                    },
                    {
                        title: "Tanggal Lahir"
                    },
                    {
                        title: "Foto"
                    }
                ]
            });

            // Atlet Table
            $('#atletTable').DataTable({
                data: atletData,
                columns: [{
                        title: "Nama Lengkap"
                    },
                    {
                        title: "Sekolah"
                    },
                    {
                        title: "Tempat Lahir"
                    },
                    {
                        title: "Tanggal Lahir"
                    },
                    {
                        title: "Berat Badan"
                    },
                    {
                        title: "Tinggi Badan"
                    },
                    {
                        title: "Foto"
                    }
                ]
            });
        }); <
        /main>


        <
        script >
            document.querySelectorAll('.dropdown-toggle').forEach(button => {
                button.addEventListener('click', function(e) {
                    const dropdownMenu = this.nextElementSibling;
                    dropdownMenu.classList.toggle('show');
                    e.stopPropagation();
                });
            });

        document.addEventListener('click', () => {
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.classList.remove('show');
            });
        });
    </script>
</body>

</html>
