<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/update.css">
    <title>تعديل البيانات </title>
</head>
<body class="text-center">
<?php require 'header.html'?>
        <br><br>
    <main class="form-signin">
      <form>
      
        
        <h1 class="h3 mb-3 fw-normal">تعديل البيانات</h1>
    
        
        
        <input type="text" name="name" placeholder="الأسم" class="form-control mb-3" required>
        <select name="blood" class="form-control mb-3" required>
                    <option disabled="" selected="">فصيلة الدم</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
              </select>
            
              <select name="country" class="form-control mb-3" required>
                    <option disabled="" selected="">المنطقة</option>
                    <option value="riyadh">الرياض</option>
                    <option value="Eastern">الشرقية</option>
                    <option value="Makkah">مكة المكرمة</option>
                    <option value="Medina">المدينة المنورة</option>
                    <option value="Al-Qassim">القصيم</option>
                    <option value="Aseer">عسير</option>
                    <option value="Tabuk">تبوك</option>
                    <option value="Hail">حائل</option>
                    <option value="alhudud alshamalia">الحدود الشمالية</option>
                    <option value="jazan">جازان</option>
                    <option value="najran">نجران</option>
                    <option value="albaha">الباحة</option>
                    <option value="aljawf">الجوف</option>
                    
              </select>
            <input type="tel" name="phone" placeholder="رقم الجوال" class="form-control mb-3" required>
            
            <input type="password" name="password" placeholder="كلمة المرور" class="form-control mb-3" required minlength="6">
        
          
       
        
        
    
        <input type="submit" name="update" value="تعديل" class="w-100 btn btn-lg btn-primary">
        <p class="mt-5 mb-3 text-muted">  </p>
        <a href="index.php"><input type="button" value="الصفحة الرئيسية" width="100" class="w-100 btn btn-lg btn-danger"></a>
        <p class="mt-5 mb-3 text-muted">2021</p>
      </form>
    </main>

</body>
</html>