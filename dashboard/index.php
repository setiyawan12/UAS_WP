<?php
include_once("../_header.php");

$result = mysqli_query($con, "SELECT * FROM barang");
// if (!$result) {
//     echo mysqli_error($con);
// }
?>
<div class="row">
    <div class="col-lg-12">
        <h1>Dashboard</h1>
        <h3>Selamat datang <?= $_SESSION['user']; ?> di panel Dashboard </h3>
        <div style="padding-bottom: 10px;">
            <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Hide</a>
        </div>
    </div>
</div>

<table class="table">
    <thead class="table-striped table-dark">
        <tr>
            <th>ID</th>
            <th>IMAGE</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Stock</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr class="table-info">
                <td>
                    <?= $row["id"]; ?>
                </td>
                <td>
                    <img src="img/<?php echo $row["gambar"] ?>">
                </td>
                <td>
                    <?= $row["nama"]; ?>
                </td>
                <td>
                    <?= $row["keterangan"]; ?>
                </td>
                <td>
                    <?= $row["stock"]; ?>
                </td>

            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<?php
include_once("../_footer.php"); ?>