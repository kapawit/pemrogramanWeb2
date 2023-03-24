<?php
$C = array();
if(isset($_POST['submit'])){
    $a11 = $_POST['a11'];
    $a12 = $_POST['a12'];
    $a13 = $_POST['a13'];
    $a21 = $_POST['a21'];
    $a22 = $_POST['a22'];
    $a23 = $_POST['a23'];

    $b11 = $_POST['b11'];
    $b12 = $_POST['b12'];
    $b13 = $_POST['b13'];
    $b21 = $_POST['b21'];
    $b22 = $_POST['b22'];
    $b23 = $_POST['b23'];

    $A = array(
        array($a11, $a12, $a13),
        array($a21, $a22, $a23)
    );

    $B = array(
        array($b11, $b12, $b13),
        array($b21, $b22, $b23)
    );

    for($i=0;$i<2;$i++){
        for($j=0;$j<3;$j++){
            $C[$i][$j] = 0;
            for($k=0;$k<2;$k++){
                $C[$i][$j] += $A[$i][$k] * $B[$k][$j];
            }
        }
    }
}
?>


<div class="container">
<h4>Input Data Matrix</h4>
<form method="post">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="a11">Enter A[1][1]:</label>
                <input type="text" class="form-control" name="a11" required>
            </div>
            <div class="form-group">
                <label for="a12">Enter A[1][2]:</label>
                <input type="text" class="form-control" name="a12" required>
            </div>
            <div class="form-group">
                <label for="a13">Enter A[1][3]:</label>
                <input type="text" class="form-control" name="a13" required>
            </div>
            <div class="form-group">
                <label for="a21">Enter A[2][1]:</label>
                <input type="text" class="form-control" name="a21" required>
            </div>
            <div class="form-group">
                <label for="a22">Enter A[2][2]:</label>
                <input type="text" class="form-control" name="a22" required>
            </div>
            <div class="form-group">
                <label for="a23">Enter A[2][3]:</label>
                <input type="text" class="form-control" name="a23" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="b11">Enter B[1][1]:</label>
                <input type="text" class="form-control" name="b11" required>
            </div>
            <div class="form-group">
                <label for="b12">Enter B[1][2]:</label>
                <input type="text" class="form-control" name="b12" required>
            </div>
            <div class="form-group">
                <label for="b13">Enter B[1][3]:</label>
                <input type="text" class="form-control" name="b13" required>
            </div>
            <div class="form-group">
                <label for="b21">Enter B[2][1]:</label>
                <input type="text" class="form-control" name="b21" required>
            </div>
            <div class="form-group">
                <label for="b22">Enter B[2][2]:</label>
                <input type="text" class="form-control" name="b22" required>
            </div>
            <div class="form-group">
                <label for="b23">Enter B[2][3]:</label>
                <input type="text" class="form-control" name="b23" required>
            </div>
        </div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary mt-4">Hitung</button>
</form>
</div>

<div class="alert alert-info mt-4">
<?php 
if ($C != null) {
    echo "<h3>Matrix C = A x B:</h3>";
    echo "<table class='table table-bordered'>";
    for($i=0;$i<2;$i++){
        echo "<tr>";
        for($j=0;$j<3;$j++){
            echo "<td>".$C[$i][$j]."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>
</div>