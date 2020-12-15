<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>convert degree</title>
</head>
<body>
    
    <form action="cal.php" method="post">

    <label for=""> ادخل درجة الحرارة المطلوب تحويلها</label><br>
    <input type="number"  name="degree" ><br>
    <label for="c"> درجة سيلزيوس</label>
    <input type="radio" name="degreeType" id="c" value="C" checked/><br>
    <label for="f">درجة فهرنهيت</label>
    <input type="radio" name="degreeType" id="f" value="F"/><br>
    <label for="k">درجة كلفن</label>
    <input type="radio" name="degreeType" id="k" value="K"/><br>

    <input type="submit" value="تحويل">
    </form>

</body>
</html>