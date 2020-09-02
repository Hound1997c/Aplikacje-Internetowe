<?php 
	//session_start();
	$this->Html->css('app/webroot/css/styles.css');
	
?>
<body>
	<div>
		<h1>Products</h1>
		<table>
		<tr>
		 <th>name</th>
		 <th></th>
		 <th></th>
		</tr>
		<?php foreach ($Products as $product): ?>
			 <tr>
			 <td>
			 <?php echo $this->Html->link($product['Product']['name'],
			 array('action' => 'view', $product['Product']['name']));?>
			 </td>
			 <td>
			 <!--?php echo $product['Product']['number']; ?-->
			 </td>
			 <td>
			 <?php echo $this->Html->link('Do Koszyka',
			 array('action' => 'toBucket', $product['Product']['name']));?>
			 </td>
			 </tr>
		 <?php endforeach; ?>
		</table>
	</div>
	<div>
		<?php
		//echo $SessionString;
		//echo $SessionBucket;
		$BucketList = explode(" ",$SessionBucket);
		/*foreach($BucketList as $prod){
			if(!preg_match('/[^A-Za-z0-9]/', $prod)){
				echo "</p>" . $prod;
				$BucketList = \array_diff($BucketList, [$prod]);
			}
		} */
		?>
		
		<h1>Bucket</h1>
		<table>
		<tr>
		 <th>name</th>
		 <th></th>
		</tr>
		<?php foreach ($BucketList as $prod): ?>
			 <tr>
			 <td>
			 <?php echo $prod;?>
			 </td>
			 <td>
			 </td>
			 </tr>
		 <?php endforeach; ?>
		</table>
		<?php echo $this->Html->link('Kup produkty',
			 array('action' => 'buyBucket' ));?>
	</div>
</body>