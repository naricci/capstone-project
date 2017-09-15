

<!-- OR, TRY THIS -->
<select name="productCategoryID">
    <?php foreach($results as $row): ?>
        <option
                value="<?php echo $row['categoryID']; ?>"
            <?php if (intval($categoryID) === $row['categoryID']): ?>
                selected="selected"
            <?php endif; ?>
        >
            <?php echo $row['categoryName']; ?>
        </option>
    <?php endforeach; ?>
</select>