<?= $this->extend('templates/layouts/main') ?>

<?= $this->section('content') ?>
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
        <div class="row mb-4 align-items-center justify-content-between">
            <div class="col-auto">
                <h2 style="color:#24285b;"><b>Detail Pengiriman</b></h2>
            </div>
            <hr style="border: 1px solid #24285b;border-radius: 5px;">
            <form class="row g-2" method="post" action="">
                <div class="col-md-12 position-relative">
                    <label for="validationCustom01" class="form-label ">Tanggal Pengiriman<span
                            class="text-danger">*</span></label>
                    <input type="date" id="validationCustom01" value="<?= $delivery['tanggal'] ?>"
                        class="form-control" name="tanggal" required readonly>
                </div>
                <div class="col-md-6 col-sm-12 position-relative">
                    <label for="validationCustom01" class="form-label ">Customer<span
                            class="text-danger">*</span></label>
                    <?php foreach ($customers as $customer) : ?>
                    <?php if ($delivery['customer_id'] == $customer['customer_id']): ?>
                    <input type="text" id="validationCustom01" value="<?= $customer['customer_name'] ?>"
                        class="form-control" name="tanggal" required readonly>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="col-md-6 col-sm-12 position-relative">
                    <label for="validationCustom01" class="form-label ">Destinasi<span
                            class="text-danger">*</span></label>
                    <?php foreach ($destinasis as $destinasi) : ?>
                    <?php if ($delivery['destinasi_id'] == $destinasi['destinasi_id']): ?>
                    <input type="text" id="validationCustom01" value="<?= $destinasi['destinasi_name'] ?>"
                        class="form-control" name="tanggal" required readonly>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="col-md-6 col-sm-12 position-relative">
                    <label for="validationCustom01" class="form-label ">Biaya Pengiriman<span
                            class="text-danger">*</span></label>
                    <input type="number" id="validationCustom01" class="form-control" name="biaya_pengiriman" value="<?= $delivery['biaya_pengiriman'] ?>" required readonly>
                </div>
                <div class="col-md-6 col-sm-12 position-relative">
                    <label for="validationCustom01" class="form-label ">Perkiraan Tanggal Sampai<span
                            class="text-danger">*</span></label>
                    <input type="date" id="validationCustom01" value="<?= $delivery['tanggal_sampai'] ?>" class="form-control" name="tanggal_sampai" required readonly>
                </div>
                <p>
                    (Wajib terisi untuk kolom dengan tanda "<span class="text-danger">*</span>").
                </p>
            </form>
        </div>
</section>
<?= $this->endSection() ?>
