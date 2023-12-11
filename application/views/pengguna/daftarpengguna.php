<!DOCTYPE html>
<html>
    <head>
        <title><?= $title ?></title>
    </head>
    <style>
        table.minimalistBlack {
            border: 3px solid #000000;
            width: 100%;
            text-align: left;
            border-collapse: collapse;
        }
        table.minimalistBlack td, table.minimalistBlack th {
            border: 1px solid #000000;
            padding: 5px 4px;
        }
        table.minimalistBlack tbody td {
            font-size: 13px;
        }
        table.minimalistBlack thead {
            background: #CFCFCF;
            background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
            background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
            background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
            border-bottom: 3px solid #000000;
        }
        table.minimalistBlack thead th {
            font-size: 15px;
            font-weight: bold;
            color: #000000;
            text-align: left;
        }
        table.minimalistBlack tfoot {
            font-size: 14px;
            font-weight: bold;
            color: #000000;
            border-top: 3px solid #000000;
        }
        table.minimalistBlack tfoot td {
            font-size: 14px;
        }

        img {
            /* border: 1px solid #ddd; Gray border */
            border-radius: 4px;  /* Rounded border */
            padding: 5px; /* Some padding */
            width: 100px; /* Set a small width */
        }
    </style>
    <body>
        <img class="img-thumbnail" src="<?= base_url('assets/backend/img/apple-touch-icon.png') ?>" alt="" width="100" height="100">
        <h1 style="text-align: center;"><?= $title ?></h1>
        <table class="minimalistBlack">
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
    </body>
</html>
