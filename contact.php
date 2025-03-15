<meta charset="utf-8">
<?php
include_once('hms/include/config.php');
if (isset($_POST['submit'])) {
    $name = $_POST['fullname'];
    $email = $_POST['emailid'];
    $mobileno = $_POST['mobileno'];
    $dscrption = $_POST['description'];

    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare("INSERT INTO tblcontactus (fullname, email, contactno, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $mobileno, $dscrption);
    $stmt->execute();
    $stmt->close();

    echo "<script>alert('تم ارسال الرسالة بنجاح');</script>";
    echo "<script>window.location.href ='contact.php'</script>";
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>مستشفى</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet" type="text/css">
</head>
<body>
    <!--start-wrap-->
    <div class="header">
        <div class="wrap">
            <!--start-logo-->
            <div class="logo">
                <a href="index.html" style="font-size: 30px;">نظام ادارة مستشفى</a>
            </div>
            <!--end-logo-->
            <!--start-top-nav-->
            <div class="top-nav">
                <ul>
                    <li><a href="index.html">الرئيسية</a></li>
                    <li class="active"><a href="contact.php">اتصل بنا</a></li>
                </ul>
            </div>
            <div class="clear"></div>
            <!--end-top-nav-->
        </div>
    </div>
    <div class="clear"></div>
    <div class="wrap">
        <div class="contact">
            <div class="section group">
                <div class="col span_1_of_3">
                    <div class="company_address">
                        <h2 align="right">عنوان المستشفى</h2>
                        <p align="right">الخرطوم</p>
                        <p align="right">الخرطوم .. شارع</p>
                        <p align="right">السودان</p>
                        <p align="right">تلفون: 7349872234</p>
                        <p align="right"> فاكس: 8798</p>
                        <p align="right">Email: <span>hospital@info.com</span></p>
                    </div>
                </div>
                <div class="col span_2_of_3">
                    <div class="contact-form">
                        <h2 align="right">ارسال رسالة</h2>
                        <form name="contactus" method="post" dir="rtl">
                            <div>
                                <span><label>الاسم</label></span>
                                <span><input type="text" name="fullname" required></span>
                            </div>
                            <div>
                                <span><label>البريد الالكتروني</label></span>
                                <span><input type="email" name="emailid" required></span>
                            </div>
                            <div>
                                <span><label>الهاتف</label></span>
                                <span><input type="text" name="mobileno" required></span>
                            </div>
                            <div>
                                <span><label>الرسالة</label></span>
                                <span><textarea name="description" required></textarea></span>
                            </div>
                            <div>
                                <span><input type="submit" name="submit" value="ارسال"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="footer">
        <div class="wrap">
            <div class="footer-left">
                <ul>
                    <li><a href="index.html">الرئيسية</a></li>
                    <li><a href="contact.php">اتصل بنا</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!--end-wrap-->
</body>
</html>

