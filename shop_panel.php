<div class="col-md-3">
    <br />

    <!-- Categories Panel -->
    <div class="panel panel-success">

        <div class="panel-heading">
            <h2 align="center" class="panel-title">Browse by Category</h2>
        </div>

        <!-- Category List Group -->
        <ul class="list-group">
            <?php foreach ($cat_results as $cat_row): ?>
                <li class="list-group-item"><a href="#"><b><?php echo $cat_row['categoryName']; ?></b></a></li>
            <?php endforeach; ?>
        </ul>

    </div><!-- /.panel.panel-success -->
    <br />

    <!-- Artists Panel -->
    <div class="panel panel-success">

        <div class="panel-heading">
            <h2 align="center" class="panel-title">Browse by Artist</h2>
        </div>

        <!-- Artists List Group -->
        <ul class="list-group">
            <?php foreach ($artist_results as $artist_row): ?>
                <li class="list-group-item"><a href="#"><b><?php echo $artist_row['artistFirstName'] . " " . $artist_row['artistLastName']; ?></b></a></li>
            <?php endforeach; ?>
        </ul>

    </div><!-- /.panel.panel-success -->
    <br />

</div><!-- /.col-md-3 -->
<!-- END OF SHOP PANEL -->