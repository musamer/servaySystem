
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

    <!--font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573" >
        <a href="./index.view.php">Home Page</a>
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>أضف مستخدم جديد</h3>
            <p class="text-muted">أكمل تعبئة الشكل لإضافة مستخدم</p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="" method="POST" style="width:50vw; min-width:300px; " >
            <div class="row mb-3">
                
                <div class="col">
                    <label class="form-label">الأسم الأول:</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Abdallah">
                </div>

                <div class="col">
                    <label class="form-label">الأسم الثاني:</label>
                    <input type="text" class="form-control" name="second_name" placeholder="S">
                </div>

                <div class="col">
                    <label class="form-label">الأسم الثالث:</label>
                    <input type="text" class="form-control" name="third_name" placeholder="F">
                </div>

                <div class="col">
                    <label class="form-label">الأسم الأخير:</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Jhn">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">الأيميل:</label>
                <input type="email" class="form-control" name="email" placeholder="name@example.com">
            </div>

            <div class="mb-3">
                <label class="form-label">تاريخ الميلاد:</label>
                <input type="date" class="form-control" name="birth_date" placeholder="10/02/2003">
            </div>

            <div class="form-group mb-3">
                <label>الجنس:</label>
                <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                <label for="male" class="form-input-label">ذكر</label>
                
                <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                <label for="female" class="form-input-label">انثى</label>


            </div>

            <div>
                <button type="submit" class="btn btn-success">حفظ</button>
                <a href="index.php" class="btn btn-danger">الغاء</a>
            </div>

        </form>
        </div>
    </div>

    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>