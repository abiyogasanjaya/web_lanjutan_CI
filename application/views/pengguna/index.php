<div class="pagetitle">
    <h1>Pengguna</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Home</a></li>
            <li class="breadcrumb-item active">Pengguna</li>
        </ol>
    </nav>
    <hr>

    <a target="_blank" href="<?= base_url('pengguna/export')?>">
        <button class="mb-2 btn btn-primary" type="button">Export Data Pengguna</button>
    </a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Level</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list_user as $key => $list): ?>
                <tr>
                    <td><?= $key + 1?></td>
                    <td><?= $list->name ?></td>
                    <td><?= $list->email ?></td>
                    <?php if($list->level_user == 1): ?>
                        <td>Administrator</td>
                    <?php else : ?>
                        <td>Guest</td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div> 
