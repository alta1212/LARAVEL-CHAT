<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 3</title>
</head>

<body style="text-align:center">

    <?php
    class ve_bang{
        
        public function socot($a)
        { 
            return $a;
        }
        public function sodong($a)
        {
            return $a;
            
        }
        public function dorong($a)
        {
           
            $style = 'width="'.$a.'px"';
            return $style;
        }
        public function doday($a)
        {
            $style = 'border="'.$a.'"';
            return $style;
        }
        public function kcdong($a)
        {
            $style = 'cellspacing="'.$a.'"';
            return $style;
        }
        public function kco($a)
        {
            $style = 'cellpadding="'.$a.'"';
            return $style;
        }
        public function noidung($a)
        {
            return $a;
        }
        public function dong($a)
        {
            return $a;
        } public function cot($a)
        {
            return $a;
        } public function mau($a)
        {
            $style = 'bgcolor="'.$a.'"';
            return $style;
        }
    }
    ?>

    <?php
    $ve_bang = new ve_bang();
    $a1=$a2=$a3=$a4=$a5=$a6=$a7=$a8=$a9=$a10="";
    
    if (isset($_POST['smb'])) {
        $socot = $_POST['socot'];
        $sodong = $_POST['sodong'];
        $dorong = $_POST['dorong'];
        $doday = $_POST['doday'];
        $kcdong = $_POST['kcdong'];
        $kco = $_POST['kco'];
        $noidung = $_POST['noidung'];
        $dong = $_POST['dong'];
        $cot = $_POST['cot'];
        $mau = $_POST['mau'];
        if (is_numeric($socot) && is_numeric($sodong)&& is_numeric($dorong)&& 
        is_numeric($doday)&& is_numeric($kcdong)&& is_numeric($kco)&& is_numeric($dong)&& is_numeric($cot)) {
            $a1=$ve_bang->socot($socot);
            $a2=$ve_bang->sodong($sodong);
            $a3=$ve_bang->dorong($dorong);
            $a4=$ve_bang->doday($doday);
            $a5=$ve_bang->kcdong($kcdong);
            $a6=$ve_bang->kco($kco);
            $a7=$ve_bang->noidung($noidung);
            $a8=$ve_bang->dong($dong);
            $a9=$ve_bang->cot($cot);
            $a10=$ve_bang->mau($mau);
           

        }
    }
    ?>

    <form action="" method="post">
        <h1>VẼ BẢNG</h1>
        <label for="">Số cột</label>
        <input type="text" name="socot" id="" style="margin-bottom:10px;width:30px;">

        <label for="">Số dòng</label>
        <input type="text" name="sodong" id="" style="margin-bottom:10px;width:30px;">
        <br>
        <label for="">Độ rộng</label>
        <input type="text" name="dorong" id="" style="margin-bottom:10px">
        <br>
        <label for="">Độ dày đường viền</label>
        <input type="text" name="doday" id="" style="margin-bottom:10px">
        <br>
        <label for="">Khoảng cách dòng</label>
        <input type="text" name="kcdong" id="" style="margin-bottom:10px">
        <br>
        <label for="">Khoảng cách ô</label>
        <input type="text" name="kco" id="" style="margin-bottom:10px">
        <br>
        <label for="">Nội dung</label>
        <input type="text" name="noidung" id="" style="margin-bottom:10px">
        <br>
        <label for="">Dòng</label>
        <input type="text" name="dong" id="" style="margin-bottom:10px;width:30px;">

        <label for="">Cột</label>
        <input type="text" name="cot" id="" style="margin-bottom:10px;width:30px;">
        <label for="">Màu</label>
        <input type="text" name="mau" id="" style="margin-bottom:10px;width:80px;">
        <br>
        <input type="submit" name="smb" value="Tạo bảng">
        <table>
            <tr></tr>
        </table>
    </form>
    <form>
        <table <?php echo $a3.' '.$a4.' '.$a5.' '.$a6 ?>>
            <?php
             for($i=1;$i<=$a2;$i++){?>
            <tr>
                <?php for ($j=1;$j<=$a1;$j++) {
                 if ($i==$a8 && $j==$a9) {
                     ?>
                <td <?php echo $a10 ?>>
                    <?php echo $a7 ?>

                </td>

                <?php
                 }} ?>
            </tr>
            <?php
              }?>

        </table>
    </form>



</body>

</html>