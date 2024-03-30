<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل مدينة</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body class="container my-5">
    <div class="container my-5">
         <h1>تعديل المدينة</h1>
        <div class="col-3" >
            <div class="container my-5">
                <?php if(!empty($cityData)):?>
                <form class="add_city" method="post">
                <input name="city_id" type="hidden" value="<?=$cityData->city_id?>" ><br>
                    <input class="form-control" name="city_name" type="text"
                     value="<?=$cityData->city_name?>" placeHolder="إسم المدينة" require="required"><br>
                    <input class="form-control" name="city_code" type="text"
                     value="<?=$cityData->city_code?>" placeHolder="كود المدينة مثل 'MED'"><br>
                    <input class="btn btn-success btn_block"  type="submit" value="حفظ التعديلات" />
                    <a class="btn btn-danger btn_block" href="<?= ROOT ?>/cities"> إلغاء التعديلات </a>
                </form>
                <?php else:?>
                <h5 style="color: red"> هذه المدينة غير موجودة </h5>
                 <?php endif;?>
            </div>

        </div>

    </div>


</body>

</html>