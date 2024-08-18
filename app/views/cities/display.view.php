<!DOCTYPE html>
<html lang="ars" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المدن</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">

        <h2>قائمة المدن</h2> <br>
        <a class="btn btn-primary" href="<?= ROOT ?>/cities/add" role="button">
            <i class='bx bx-plus-circle'> إضافة مدينة </i></a>

    </div>

    <div class="container container-sm">

        <table class="table table-bordered text-center table-sm table-responsive  table-striped">
            <thead class="table-dark">
                <th style="color:white">#</th>
                <th style="color:white">الرقم المرجعي</th>
                <th style="color:white">أسم المدينة</th>
                <th style="color:white">كود المدينة</th>
                <th style="color:white">الإجراءات</th>
            </thead>
            <tbody>
            <?php if(!empty($cities)):?>
                <?php foreach ($cities as $row) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row->city_id ?></td>
                        <td><?= $row->city_name ?></td>
                        <td><?= $row->city_code ?></td>
                        <td>
                            <a href="<?= ROOT ?>/cities/edit/<?= base64_encode($row->city_id) ?>" class='btn btn-success'> 
                            <i class='bx bxs-edit'></i> </a>
                            <a href="<?= ROOT ?>/cities/delete/<?= base64_encode($row->city_id) ?>" class='btn btn-danger confirm'>
                            <i class='bx bxs-trash'> </i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
                <?php else:?>
                <h8 style="color: red"> لا توجد بيانات - يرجى إضافة مدينة </h8>
                 <?php endif;?>

            </tbody>
        </table>

    </div>

</body>

</html>