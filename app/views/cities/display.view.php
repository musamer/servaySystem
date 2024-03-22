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
        <div class="col">
            <h2>قائمة المدن</h2>
            <a class="btn btn-primary" href="<?= ROOT ?>/cities/add" role="button">إضافة مدينة</a>
        </div>
    </div>
    <div class="container container-sm">
        <div>
            <table class="table table-bordered text-center table-sm table-responsive">
                <thead class="table-dark">
                    <th>#</th>
                    <th>الرقم المرجعي</th>
                    <th>أسم المدينة</th>
                    <th>كود المدينة</th>
                    <th>الإجراءات</th>
                </thead>
                <tbody>
                    <?php foreach ($cities as $row) : //print_r($cities); 
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row->city_id ?></td>
                            <td><?= $row->city_name ?></td>
                            <td><?= $row->city_code ?></td>
                            <td>
                                <a href='' class='btn btn-success'>تعديل</a>
                                <a href='' class='btn btn-danger'>حذف</a>
                            </td>
                        </tr>


                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>



    </div>

</body>

</html>