<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة مدينة</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body class="container my-5">
    <div class="container my-5">
         <h1>إضافة مدينة</h1>
        <div class="col-3" >
            <div class="container my-5">

                <form class="add_city" method="post">
                    <input class="form-control" name="city_name" type="text" placeHolder="إسم المدينة" require="required"><br>
                    <input class="form-control" name="city_code" type="text" placeHolder="كود المدينة مثل 'MED'"><br>
                    <input class="btn btn-primary btn_block" name="btn_add_city" type="submit" value="أضف" />

                </form>
            </div>

        </div>

    </div>


</body>

</html>