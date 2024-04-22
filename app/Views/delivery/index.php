<?= $this->extend('templates/layouts/main') ?>

<?= $this->section('content') ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
<section class="py-5 py-xl-5  mt-5" style="margin-top: 2vw;">
    <div class="container">
        <div class="card text-bg-light mb-3 mt-5">
            <div class="card-body">
                <a href="/">
                    <svg fill="#000000" width="18px" height="18px" viewBox="-4.5 0 32 32" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <title>home</title>
                            <path
                                d="M19.469 12.594l3.625 3.313c0.438 0.406 0.313 0.719-0.281 0.719h-2.719v8.656c0 0.594-0.5 1.125-1.094 1.125h-4.719v-6.063c0-0.594-0.531-1.125-1.125-1.125h-2.969c-0.594 0-1.125 0.531-1.125 1.125v6.063h-4.719c-0.594 0-1.125-0.531-1.125-1.125v-8.656h-2.688c-0.594 0-0.719-0.313-0.281-0.719l10.594-9.625c0.438-0.406 1.188-0.406 1.656 0l2.406 2.156v-1.719c0-0.594 0.531-1.125 1.125-1.125h2.344c0.594 0 1.094 0.531 1.094 1.125v5.875z">
                            </path>
                        </g>
                    </svg></a> / Olah Data
            </div>
        </div>
        <h2 style="color:#24285b;"><b>Pengiriman</b></h2>
        <hr style="border: 1px solid #24285b;
    border-radius: 5px;">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" id="myTab">
                    <li class="nav-item">
                        <a href="#teknis" class="nav-link active" data-bs-toggle="tab">Pengiriman</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="teknis">
                        <div class="table-responsive p-4">
                            <a class="btn btn-primary" href="/delivery/new">
                                <svg width="1em" height="1em" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                    </g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M13 3C13 2.44772 12.5523 2 12 2C11.4477 2 11 2.44772 11 3V11H3C2.44772 11 2 11.4477 2 12C2 12.5523 2.44772 13 3 13H11V21C11 21.5523 11.4477 22 12 22C12.5523 22 13 21.5523 13 21V13H21C21.5523 13 22 12.5523 22 12C22 11.4477 21.5523 11 21 11H13V3Z"
                                            fill="#ffffff"></path>
                                    </g>
                                </svg>
                                Tambah Pengiriman
                            </a>
                            <table id="example1" class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="cell">No. Transaksi</th>
                                        <th class="cell">Tanggal Input</th>
                                        <th class="cell">Customer Name</th>
                                        <th class="cell">Biaya</th>
                                        <th class="cell">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($deliveries as $delivery): ?>
                                    <tr>
                                        <td><?= $delivery['id'] ?></td>
                                        <td><?= $delivery['tanggal'] ?></td>
                                        <td><?= $delivery['customer_id'] ?></td>
                                        <td><?= $delivery['biaya_pengiriman'] ?></td>
                                        <td>
                                            <a href="<?= base_url('delivery/' . $delivery['id'] . '/detail') ?>"
                                                class="btn btn-sm btn-outline-secondary" target="_blank">Detail</a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example1').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copyHtml5',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: ':visible'
                    }
                }, 'colvis'
            ]

        });
    });
</script>
<?= $this->endSection() ?>
