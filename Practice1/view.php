
<?php
require_once 'Demo.php';

$ob = new Demo();
$ans =$ob->getResult();
?>
<form action="" method="post">
    <table>
        <tr>
            <td>First Number</td>
            <td>
                <input type="number" name="firstNumber">
            </td>
        </tr>
        <tr>
            <td>Second Number</td>
            <td>
                <input type="number" name="secondNumber">
            </td>
        </tr>
        <tr>
            <td>
                Odd<input type="checkbox" value="odd" name="check">
            </td>
            <td>
                Even<input type="checkbox" value="even" name="check">
            </td>
        </tr>
        <tr>
            <td>
                Ans
            </td>
            <td>
                <textarea rows="5" cols="20">
                    <?php
                        echo $ans;
                    ?>
                </textarea>
            </td>

        </tr>
        <tr>
            <td>
                <input type="submit" name="btn" value="submit">
            </td>
        </tr>
    </table>
</form>
