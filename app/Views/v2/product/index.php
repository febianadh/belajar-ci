<?= $this->extend('v2/base') ?>
<?= $this->section('content') ?>
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                        <th scope="col ">ID</th>
                        <th scope="col ">Product Name</th>
                        <th scope="col ">Stock</th>
                        <th scope="col ">Price</th>
                        <th scope="col ">Category</th>
                        <th scope="col ">Action</th>
                    </tr>
                </thead>
                <tfoot>
                <tr>
                        <th scope="col ">ID</th>
                        <th scope="col ">Product Name</th>
                        <th scope="col ">Stock</th>
                        <th scope="col ">Price</th>
                        <th scope="col ">Category</th>
                        <th scope="col ">Action</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php $no = 0; ?>
                    <?php foreach ($products as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><?= $item['name'] ?></td>
                        <td><?= $item['stock'] ?></td>
                        <td><?= $item['price'] ?></td>
                        <td><?= $item['category'] ?></td>
                        <td>
                            <div class="btn-group " role="group " aria-label="Basic example ">
                                <form action="/product/<?= $item['id'] ?>" method="POST" onsubmit="return confirm(`Are you sure?`)">
                                    <a href="/product/<?= $item['id'] ?>/edit" class="btn btn-info text-white "><i class='bx bx-pencil'></i></a>
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="btn btn-danger text-white" type="submit">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<?= $this->endSection() ?>