<!doctype html>
<html>
    <head><meta charset="utf-8"><title>List of covefefe</title></head>
    <body>
        <?php if (isset($error)): ?>
            <p><?php echo $error; ?></p>
        <?php else: ?>
	<div class="row gtr-200">
		<div class="col-6 col-12">
		<h3>TABLE</h3>	
		<div class="table-wrapper">
		<table>
			<thead><tr><th>Name</th><th>Process</th><th>Rating</th></tr></thead>
			<tbody>
	<?php foreach ($covfefe as $cof): ?> 
				<!-- line -->
			<tr>
			<td> <a href="view.php?id=<?=$cof['id']?>"><?=htmlspecialchars($cof['name'], ENT_QUOTES, 'UTF-8')?></a> </td>
			<td> <?=htmlspecialchars($cof['process'], ENT_QUOTES, 'UTF-8')?> </td> 
			<td> <?=htmlspecialchars($cof['rating'], ENT_QUOTES, 'UTF-8')?> </td> 
			</tr>
	<?php endforeach; ?>
			</tbody>
		</table>	
		</div>
		</div>
		
	</div>
	<blockquote>
		<p>
		</p>
	</blockquote>
        <?php endif; ?>
    </body>
</html>
