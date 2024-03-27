
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
        *********
    </nav>

    <div class="container">
    <?php 
        if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }    
    ?>

        <a href="add" class="btn btn-dark mb-3">Add New</a>

        <table class="table table-hover text-center">
    <thead class="table-dark">
    <tr>
        <th scope="col">الهوية الوطنية</th>
        <th scope="col">الاسم الاول</th>
        <th scope="col">الاسم الثاني</th>
        <th scope="col">الاسم الثالث</th>
        <th scope="col">الاسم الاخير</th>
        <th scope="col">الأيميل</th>
        <th scope="col">تاريخ الميلاد</th>
        <th scope="col">الجنس</th>
        <th scope="col">حذف\تعديل</th>
    </tr>
    </thead>
    <tbody>

    <?php if(!empty($personData)): foreach($personData as $row):?>
        
                <tr>
                    <td><?=$row->person_id?></td>
                    <td><?=$row->first_name?></td>
                    <td><?=$row->second_name?></td>
                    <td><?=$row->third_name?></td>
                    <td><?=$row->last_name?></td>
                    <td><?=$row->email?></td>
                    <td><?=$row->birth_date?></td>
                    <td><?=$row->gender?></td>
                    <td>
                        <a href="<?=ROOT?>/person/edit/<?=base64_encode($row->person_id)?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="<?=ROOT?>/person/delete/<?=base64_encode($row->person_id)?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>
                </tr>
                <?php endforeach; endif;?>
                
                
    
    </tbody>
</table>
    </div>

    <!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>